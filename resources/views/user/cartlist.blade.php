<x-mainheader />
<style>
    .view-img {
        height: 150px;
    }

    .cardlist-divider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;

    }
</style>

<div class="container mt-4">
    <div class="mb-3 mt-2"><a href="/admin/dashboard">go back</a>
    </div>

    @foreach($data as $item)
    <div class="row cardlist-divider">
        <div class="col-sm-4 mt-3 mb-3">
            <a href="viewProduct/{{$item->id}}">
                <img src="{{$item->gallery}}" alt="" class="view-img">
            </a>

        </div>
        <div class="col-sm-4 mt-3 mb-3">

            <h3>{{$item->name}}</h3>

            <p>{{$item->description}}</p>


        </div>
        <div class="col-sm-4 mt-3 mb-3">
            <button type="button" class="removeitem btn btn-danger">remove</button>
        </div>
    </div>
    @endforeach
</div>

<!-- <script>
    $(document).ready(function(){
       

        $('.addcartbtn').on('click',function(e){
            e.preventDefault();

            var id = $(this).val();
        

            $.ajax({
                type:"get",
                url:"/addtocart/"+id,
                success:function(response){
                    if(response.status==200)
                    {
                        location.reload();
                    }
                    else{
                        alert(response.data);
                    }
                },
                
        error: function(error) {
          console.log(error);
          alert('failed');
        }

            });
            

        })

        
        
    })
</script> -->

<x-mainfooter />