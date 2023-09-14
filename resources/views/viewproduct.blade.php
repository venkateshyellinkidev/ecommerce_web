<x-mainheader />
<style>
    .view-img{
        height: 300px;
    }
</style>

<div class="container mt-4">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$data->gallery}}" alt="" class="view-img">

        </div>
        <div class="col-sm-6">
            <a href="/admin/dashboard">go back</a>
            <h4>{{$data->name}}</h4>
            <h3>Price   : {{$data->price}}</h3>
            <h4>Details :{{$data->description}}</h4>
            <h4>category : {{$data->category}}</h4>
            <br><br>

            <button type="button" class="btn btn-primary mr-2 addcartbtn" value="{{$data->id}}">Add to cart </button>
            <button type="button" class="btn btn-success buybtn">Buy now </button>


        </div>
    </div>
</div>

<script>
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
</script>

<x-mainfooter />