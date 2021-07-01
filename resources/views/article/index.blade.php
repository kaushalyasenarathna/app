@extends('layouts.app1')
 @section('content')
 <div class="backgroundpadding">
 <div class="card-body">
 <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Article DATA</h4>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div id="content-page" class="content-page">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title"></h4>
                                        </div>
                                    </div>
                                    <form class="d-flex" action="{{ route('article.index') }}" method="GET">
              <input placeholder="Search here..." type="text" value="{{ request('search') }}" class="form-control"
                     name="search">
              <button class="mx-2 btn btn-primary text-light" value="search">
                <i class="fa fa-search"></i>
              </button>
            
            </form>
                                    <div class="iq-card-body">
                                        <div id="table" class="table-editable">
                                            <span class="table-add float-right mb-3 mr-2">
                                                <a class="btn btn-primary rounded-pill"
                                                    href="{{route('article.create') }}">create</a>
                                            </span>
                                            <table class="table table-sm" align="center">
                                                <thead>
                                              
                                                    <tr>
                                                       
                                                        <th><TITLE></TITLE> </th>
                                                        <th>DESCREPTION</th>
                                                        <th>IMAGE</th>
                                                      
                                                     
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($article as $data)
                                                    <tr>
                                                     
                                                        <td>{{ $data->title}}  </td>
                                                        <td> {{ $data->description }} </td>
                                                      
                                                 
                                                       

                                                        <td><img  src="images/{{ $data->image}}" style="width: 100px" ></td>
                                                     
                                                  
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 @endsection