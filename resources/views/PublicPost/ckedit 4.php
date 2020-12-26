<div style="margin-top: 5%;">
<button type="button" data-toggle="modal" data-target="#exampleModal" class="text-success" style="padding: 1%; font-weight: bold;">
    <img src="{{asset('images/publicar.png')}}" width="100">
	Añadir Publicacion
</button>
</div>
<!-- Modal -->

<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Añadir Publicacion</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                     <span aria-hidden="true close-btn">×</span>

                </button>

            </div>

           <div class="modal-body">
                <form enctype="multipart/form-data">


                    <div  style="font-size:1.5rem; padding-top:1%;">Categoria: 
                        <select wire:model="category_id">
                            <option value="">Seleccione</option>
                            @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                     </div>
                     <div  style="font-size:1.5rem; padding-top:1%;">Etiquetas: 
                        @foreach($tags as $index=>$tag)
                            <input type="checkbox" wire:model="tag_id.{{ $index }}" value="{{$tag->id}}">{{$tag->name}}
                        @endforeach
                    </div>

                    <div class="form-group">

                        <label align="center">title</label>

                        <input type="text" wire:model="title" class="form-control" placeholder="Enter title" style="padding:2%; font-weight: bold;">

                        @error('title') <span class="text-danger error">{{ $message }}</span>@enderror

                    </div>

                    <div class="form-group">
                        <label>Description</label>
                            <div class="container">
              
                            <div class="panel-body">
                                <form>
                                    <textarea  wire:model="body"  class="ckeditor"  id="editor1" rows="10" cols="80">
                                       Descripcion del post
                                    </textarea>
                                </form>
                            </div>
                        </div>            
                    </div>
                     @error('body') <span class="text-danger error">{{ $message }}</span>@enderror

                    </div>
 
                    <div class="form-group">

                        <label>Imagen</label>

                        <input type="file" wire:model="file"  accept="image/*">
                        @error('file') 
                            <span class="text-danger error">{{ $message }}</span>
                        @enderror
                    

                    </div>
  
                    Publicar
                    <input type="radio" wire:model="status" value="1" class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">Si
                    <input type="radio" wire:model="status" value="0">No
                </form>
               
            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>

                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save changes</button>

            </div>

        </div>

    </div>

</div>