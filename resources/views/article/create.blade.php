@extends('layouts.app1')
 @section('content')
 <div class="backgroundpadding">
 <div class="card-body1">
 <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">ARTICLE FORM</h4>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                            <form action="{{route('article.store')}}" method="POST" class="form-card" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="form-group">
                                        <label  >TITLE</label>
                                        <input type="text" class="form-control" id="title" name="title">
                                    </div>
                                    <div class="form-group">
                                    <label  > DESCRIPTION</label>
                                        <input type="textarea" class="form-control" id="description" name="description">
                                    </div>
                                    <div class="form-group">
                                    <label  >COVER IMAGE:</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                    <a class="btn btn-danger rounded-pill" href="">Cansel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
 @endsection