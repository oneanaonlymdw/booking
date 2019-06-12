@extends("admin.layout.master")
@section("title","Route : List")



@section("home_data")

<link href="{{URL::to('/')}}/public/css/tags-input-style.css" rel="stylesheet">
<div class="row">
       
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Add Route</h1>
              </div>
              <form class="user" id="route" >
                  {{ csrf_field() }}
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="routeOrigin" name="routeOrigin" placeholder="Route Origin">
                  </div>
                  <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="routeEnd" name="routeEnd" placeholder="Route End">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" data-role="tagsinput" id="pickupPoints" name="pickupPoints" placeholder="Pickup Points">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" data-role="tagsinput" id="dropPoints" name="dropPoints" placeholder="Drop Points">
                </div>  
                <input type="button" value="Add Route" onclick="addRoute()" class="btn btn-primary btn-user btn-block">              
           
                <hr>
              </form>
              <hr>            
            </div>
          </div>
        </div>
      </div>

@endsection



