<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Log;
use Session;

class GalleryController extends Controller
{
	/*
	public function __construct(){

		$this->middleware('auth');
	}*/

	public function viewGalleryList(){

		if (Auth::check()) {
			$galleries = Gallery::where('created_by', Auth::user()->id)->get();
			return view('gallery.gallery')->with('galleries',$galleries);
    
		}else
			return redirect('/');
	}
	public function viewGalleryTodo(){

		$galleries = Gallery::all();
        return view('Contenido.galeria', ['galleries' => $galleries]);
	}
	public function viewImagenes($id){

        $gallery = Gallery::findOrFail($id);
		return view('Contenido.imagenes')->with('gallery',$gallery);
	}
	public function saveGallery(Request $request){

		//validar la solicitud a través de las reglas de validación
		$validador = Validator::make($request->all(),[
			'gallery_name' => 'required|min:3',

			]);

		//acciones cuando la validación ha fallado
		if($validador->fails()){
			return redirect('gallery/list')
				->withErrors($validador)
				->withInput();
		}
		$gallery = new Gallery;

		//guardar nueva galeria
		$gallery->name = $request->input('gallery_name');
		$gallery->created_by = Auth::user()->id;
		$gallery->published = 1;
		$gallery->save();

		return redirect()->back();
	}
	public function viewGalleryPics($id){
		$gallery = Gallery::findOrFail($id);
		return view('gallery.gallery-view')->with('gallery',$gallery);
	}
	
	public function doImageUpload(Request $request)
	{

		//obtener el archivo de la solicitud de publicación
		$file = $request->file('file');
		//Establecer mi nombre de archivo
		$filename = uniqid() . $file->getClientOriginalName();

		if (!file_exists('gallery/images')){
			mkdir('gallery/images', 0777, true);

		}
		//Mover el archivo a la ubicación correcta
		$file->move('gallery/images', $filename);

		if (!file_exists('gallery/images/thumbs')){
			mkdir('gallery/images/thumbs', 0777, true);

		}
		$thumb = Image::make('gallery/images/' . $filename)->resize(240,160)->save('gallery/images/thumbs/' . $filename,50);

		//Guardar los detalles de la imagen en la base de datos
		$gallery = Gallery::find($request->input('gallery_id'));//AQUI
		
		//var_dump($gallery);

		$image = $gallery->images()->create([
			'gallery_id' => $request->input('gallery_id'),
			'file_name' => $filename,
			'file_size' => $file->getClientSize(),
			'file_mime' => $file->getClientMimeType(),
			'file_path' => 'gallery/images/' . $filename,
			'created_by' => Auth::user()->id,
 
		]);
		return $image;
	}
	public function deleteGallery($id){

		//load the gallery
		$currentGallery = Gallery::findOrFail($id);

		//check ownership
		if ($currentGallery->created_by != Auth::user()->id){
			abort('403','No puedes borrar esta galeria');
			
		}
		//get the images
		$images = $currentGallery->images();

		//delete the images
		foreach ($currentGallery->images as $image) {
			unlink(public_path($image->file_path));
			unlink(public_path('gallery/images/thumbs/' . $image->file_name));
		}

		//delete the BD records
		$currentGallery->images()->delete();
		$currentGallery->delete();
		Session::flash('success','La galeria ha sido eliminada correctamente.');
		return redirect()->back();
	}
/*
   public function doImageUpload(Request $request)
	{

		$image = new Image();

		$file = $request->file('file');
		$filename = uniqid() . $file->getClientOriginalName();
		$file->move('gallery/images', $filename);

		if ($request-> has("gallery_id"))
		{
			$valor = $request->gallery_id;
			$gallery = Gallery::find($valor);

			$image->gallery_id = $request->input("gallery_id");
			$image->file_name = $filename;
			$image->file_size = $file->getClientSize();
			$image->file_mime = $file->getClientMimeType();
			$image->file_path = 'gallery/images/' . $filename;
			$image->created_by = 1;
			$image->save();
			return "Creado correctamente";

		}else
		return "Creado incorrectamente";
		
		
	}
    */
}
