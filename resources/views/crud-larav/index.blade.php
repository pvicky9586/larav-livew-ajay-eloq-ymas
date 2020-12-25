@extends('layout')

@section('content')
    <div class="">
         <br><br>
        <div class=" ">           
                <h2>CRUD con Laravel 8  </h2>            
            <div class="pull-right">
                <a href="{{ route('posts.create') }}" title="Create a post">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXGQi2Ijmk558dACSJbk6Ul_e1NEhRUjAqdw&usqp=CAU" width="100">
                <!-- <i class="fa fa-plus-circle fa-2x fa-lg" style="color:#FFFFFF;"/></i>
                 -->
                 </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div style="margin-right:10%" class="alert alert-success">
            <span >{{ $message }}</span>
        </div>
    @endif

    <table class="table  table-bordered">
       <thead class="bg-primary">
       <tr align="center">
           
            <th >Title</th>
            <th>Body</th>
            <th scope="col">Created</th>
            <th width="180px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td  align="center" class="display-4 actions-td">{{ $post->title }}</td>
                <td   >{{ $post->body }}</td>
                <td class="actions-td">
                    @if ($post->created_at)
                        {{ date_format($post->created_at, 'j M Y') }}
                    @endif
                </td>
                <td class="actions-td">
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        <a href="{{ route('posts.show', $post->id) }}">
                           <!--  <i class="fas fa-eye text-success  fa-lg"/></i> -->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpe2p8aETLp2oOSAuBf7xOpSooEtgGxOBHLw&usqp=CAU" width="40" title="Ver Post">
                        </a>&nbsp;| &nbsp;
                        
                        <a href="{{ route('posts.edit', $post->id) }}">
                             <!--  <i class="fas fa-edit  fa-lg"></i> -->
                           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt6Au_LAgyHBnmyjUmHNtR5SKSaFSSJUD6ow&usqp=CAU" title="Actualizar" width="40">
                        </a>&nbsp;| &nbsp;
                      

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                           <!--  <i class="fas fa-trash fa-lg text-danger"></i> -->
                           <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Icono_aviso_borrar.svg/935px-Icono_aviso_borrar.svg.png" width="40" title="Eliminar">

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $posts->links() !!}

@endsection