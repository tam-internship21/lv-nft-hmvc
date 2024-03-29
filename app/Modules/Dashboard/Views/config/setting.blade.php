@extends('Dashboard::layout')
@section('title', $row->title)
@section('content')
<form method="post" enctype="multipart/form-data">
    @include('Dashboard::inc.formheader')
    @include("Dashboard::inc.message")
    <div class="row">
        <div class="col-md-4">
            <div class="card-box">
                <h5 class="mb-3 mt-0 text-uppercase bg-light p-2"><i class="mdi mdi-eye-check"></i> review</h5>
                <div class="text-left mt-3">
                    <p class="text-muted">Logo</p>
                    <img class="mb-2" src="/public/upload/images/logo/{{$settings['PHOTO_LOGO']}}" style="max-width: 100%;width: auto;" />
                    <p class="text-muted">Logo Footer</p>
                    <img class="mb-2" src="/public/upload/images/logo/{{$settings['PHOTO_LOGO_FOOTER']}}" style="max-width: 100%;width: auto;" />
                    <p class="text-muted">FAVICON</p>
                    <img class="mb-2" src="/public/upload/images/logo/{{$settings['PHOTO_FAVICON']}}" style="max-width: 100%;width: auto;" />
                    <p class="text-muted mb-2 font-13">Email :</strong> <span class="ml-2">{{$settings['EMAIL']}}</span></p>
                    <p class="text-muted mb-2 font-13">Phone :</strong> <span class="ml-2">{{$settings['PHONE']}}</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card-box">
                <h5 class="mb-3 mt-0 text-uppercase bg-light p-2"><i class="mdi mdi-square-edit-outline"></i> Logo</h5>
                <div class="form-group mb-3">
                    <label>Logo [jpg,png,svg,gif] [146x62px]</label>
                    <input type="file"  class="form-control" name="PHOTO_LOGO">
                </div>
                <div class="form-group mb-3">
                    <label>Logo Footer [jpg,png,svg,gif] [220x94px]</label>
                    <input type="file"  class="form-control" name="PHOTO_LOGO_FOOTER">
                </div>
                <div class="form-group mb-3">
                    <label>Favicon [jpg,png,svg,gif] [32x32px]</label>
                    <input type="file"  class="form-control" name="PHOTO_FAVICON">
                </div>
            </div>
            <div class="card-box">
                <h5 class="mb-3 mt-0 text-uppercase bg-light p-2"><i class="mdi mdi-square-edit-outline"></i> Thông tin</h5>                
                <div class="form-group mb-3">
                    <label for="title">Email</label>
                    <input type="text"  class="form-control" name="EMAIL" value="{{$settings['EMAIL']}}" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="title">Phone</label>
                    <input type="text" class="form-control" name="PHONE" value="{{$settings['PHONE']}}" placeholder="Ex : 0987654321">
                </div>
                <div class="form-group">
                    <label for="title">Privacy EN</label>
                    <textarea name="PRIVACY_CONTENT_EN" class="form-control" rows="20">{{$settings['PRIVACY_CONTENT_EN']}}</textarea>
                </div>
                <div class="form-group">
                    <label for="title">Privacy VI</label>
                    <textarea name="PRIVACY_CONTENT_VI" class="form-control" rows="20">{{$settings['PRIVACY_CONTENT_VI']}}</textarea>
                </div>                     
            </div>
            <div class="card-box">
                <h5 class="mb-3 mt-0 text-uppercase bg-light p-2"><i class="mdi mdi-square-edit-outline"></i> Hệ thống</h5>                
                <div class="form-group">
                    <label>Maintain</label>
                    <select name="MAINTAIN_MODE" class="form-control">
                        <option value="0" {{$settings['MAINTAIN_MODE']?'selected':''}}>Đang hoạt động</option>
                        <option value="1" {{$settings['MAINTAIN_MODE']?'selected':''}}>Đang bảo trì</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">BG Point API Secret Key </label>
                    <input type="text" class="form-control" name="BGPOINT_API_SECRET_KEY" value="{{$settings['BGPOINT_API_SECRET_KEY']}}" placeholder="key">
                </div>                                 
            </div>
        </div>
    </div>
    @include('Dashboard::inc.formfooter')
</form>
@endsection