<div class="container">
    <style>
        nav svg{
            height:20px
        }
        nav .hidden{
            display:block;
        }
    </style>
    <div class="pannel-default">
        <div class="pannel-heading p-lg-3">
            <h3 class="text-white-50">Admin categories</h3>
        </div>
        <div class="pannel-body p-lg-3">
            <table class="table bg-white">
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                        <a href="#"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
            {{$categories->links()}}
        </div>
    </div>
</div>
