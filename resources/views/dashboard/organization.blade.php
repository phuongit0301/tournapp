@extends ('layout.master')

@section ('title')
Organization MANAGEMENT
@endsection

@section ('content')

<div class="col-sm-12 col-md-12 col-lg-12 organization">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="view-message" id="view-message">
    </div>
    <form class="form-horizontal" id="form-organization"  role="form" enctype="multipart/form-data">
        <input type="hidden" id="organization_id" name="organization_id" 
            @if(isset($data['organization']) && isset($data['organization']->id))
                value="{{$data['organization']->id}}"
            @endif
        >
        <input type="hidden" id="sport_id" name="sport_id" 
            @if(isset($data['current_sport']) && isset($data['current_sport']->id))
                value="{{$data['current_sport']->id}}"
            @endif
        >
        <div class="form-group" >
            <label for="" class="col-sm-2 col-md-2 control-label text-left">Sport:</label>
            <div class="col-sm-6">
                <span class="text">{{$data['current_sport']->sport_name}}</span>
            </div>
        </div>
        <div class="form-group big-label">
            <label class="col-sm-4 col-md-4 text-left">ORGANIZATION INFO</label>
        </div>
        <div class="form-group">
            <label for="organization_name" class="col-sm-2 col-md-2 control-label text-left">Organization Name:<span class="red-flower">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="organization_name" name="organization_name" required
                    @if(isset($data['organization']) && isset($data['organization']->organization_name))
                        value="{{$data['organization']->organization_name}}"
                    @endif

                >
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="organization_country" class="col-sm-2 col-md-2 control-label text-left">Country:<span class="red-flower">*</span></label>
            <div class="col-md-6" style="padding: 0">
                <div class="col-sm-6 col-md-6">
                    <select class="form-control ui dropdown" id="organization_country" name="organization_country" required>
                    <option value="">Select Country</option>
                    @if(isset($data['list_countries']))
                        @foreach($data['list_countries'] as $country)
                            <option value="{{$country->id}}"
                                @if(isset($data['organization']) && isset($data['organization']->organization_country) && $data['organization']->organization_country == $country->id)
                                            selected="true"
                                        @endif
                            >{{$country->country_name}}</option>
                        @endforeach
                    @endif   
                    </select>
                </div>
                <label for="organization_state" class="col-sm-1 col-md-1 control-label">State:<span class="red-flower">*</span></label>
                <div class="col-sm-5 col-md-5">
                    <input type="text" class="form-control" id="organization_state" required name="organization_state"
                        @if(isset($data['organization']) && isset($data['organization']->organization_state))
                            value="{{$data['organization']->organization_state}}"
                        @endif
                    >
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="organization_website" class="col-sm-2 col-md-2 control-label text-left">Website:<span class="red-flower">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="organization_website" name="organization_website" required
                    @if(isset($data['organization']) && isset($data['organization']->organization_website))
                        value="{{$data['organization']->organization_website}}"
                    @endif
                >
                <div class="help-block with-errors"></div>
            </div>
        </div> 
        <div class="form-group">
            <label for="organization_email" class="col-sm-2 col-md-2 control-label text-left">Email:<span class="red-flower">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="organization_email" name="organization_email" required
                    @if(isset($data['organization']) && isset($data['organization']->organization_email))
                        value="{{$data['organization']->organization_email}}"
                    @endif
                >
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="organization_" class="col-sm-2 col-md-2 control-label text-left">Phone Number:<span class="red-flower">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="organization_phone" name="organization_phone" required
                    @if(isset($data['organization']) && isset($data['organization']->organization_phone))
                        value="{{$data['organization']->organization_phone}}"
                    @endif
                >
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="organization_fax" class="col-sm-2 col-md-2 control-label text-left">Fax Number:<span class="red-flower">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="organization_fax" name="organization_fax" required
                    @if(isset($data['organization']) && isset($data['organization']->organization_fax))
                        value="{{$data['organization']->organization_fax}}"
                    @endif
                >
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="organization_address" class="col-sm-2 col-md-2 control-label text-left">Address:<span class="red-flower">*</span></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="organization_address" name="organization_address" required
                    @if(isset($data['organization']) && isset($data['organization']->organization_address))
                        value="{{$data['organization']->organization_address}}"
                    @endif
                >
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="form-group">
            <label for="organization_city" class="col-sm-2 col-md-2 control-label text-left">City:<span class="red-flower">*</span></label>
            <div class="col-sm-3 col-md-3">
                <input type="text" class="form-control" id="organization_city" required name="organization_city"
                    @if(isset($data['organization']) && isset($data['organization']->organization_city))
                        value="{{$data['organization']->organization_city}}"
                    @endif
                >
                <div class="help-block with-errors"></div>
            </div>
            
        </div>
        <div class="form-group">
            <label for="organization_zip" class="col-sm-2 col-md-2 control-label text-left">Zip:<span class="red-flower">*</span></label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="organization_zip" required name="organization_zip"
                    @if(isset($data['organization']) && isset($data['organization']->organization_zip))
                        value="{{$data['organization']->organization_zip}}"
                    @endif
                >
                <div class="help-block with-errors"></div>
            </div>
        </div>      
        <div class="form-group">
            <label for="file" class="col-sm-2 col-md-2 control-label text-left">Logo:</label>
            <div class="col-sm-6">
             <div class="avatar-setup">
                <img id="thumbnil" alt="image" data-default-url="{{ asset('src/image/default-logo.png') }}"
                <?php 
                if(isset($data['organization']) && isset($data['organization']->organization_logo) ){
                ?>
                 src="https://tournapp-cms-buck.s3-eu-west-1.amazonaws.com<?php echo $data['organization']->organization_logo; ?>" 
                 <?php 
                }else{
                 ?>
                src="{{ asset('src/image/default-logo.png') }}" 
                 <?php 
                }            
                 ?>
                 />
            </div>
            <!-- <button type="submit" class="col-sm-3 col-md-3 btn btn-primary btn-upload">Upload</button> -->
            <div class="col-sm-4 col-md-4 col-lg-4 custom-file-upload">
                <input type="file" name="organization_logo" id="organization_logo" class="inputfile" accept="image/*"  onchange="showMyImage(this, 'thumbnil')" />
                <label for="organization_logo" class="label-file">Change Logo</label>    
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 custom-file-upload">
                <button class="btn-remove" id="btn-remove-logo" type="button">Remove Logo</button>
            </div>
        </div>
    </div>
    <div class="form-group big-label">
        <label for="" class="col-sm-4 col-md-4 text-left">PERSON IN CHARGE</label>
    </div>
    <div class="form-group">
        <label for="pic_fullname" class="col-sm-2 col-md-2 control-label text-left">Name:<span class="red-flower">*</span></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="pic_fullname" name="pic_fullname" required
                @if(isset($data['organization']) && isset($data['organization']->pic_fullname))
                    value="{{$data['organization']->pic_fullname}}"
                @endif
                >
            <div class="help-block with-errors"></div>
        </div>
    </div>
    <div class="form-group">
        <label for="pic_position" class="col-sm-2 col-md-2 control-label text-left">Position:<span class="red-flower">*</span></label>
        <div class="col-sm-6">
            <select class="form-control ui dropdown" id="pic_position" name="pic_position" required>
                <option value="">Select Position </option>
                    @if(isset($data['list_positions']))
                        @foreach($data['list_positions'] as $job)
                            <option value="{{$job->position_name}}"
                                @if(isset($data['organization']) && isset($data['organization']->pic_position) && $data['organization']->pic_position == $job->position_name)
                                    selected="true"
                                @endif

                            >{{$job->position_name}}</option>
                        @endforeach
                    @endif
                    <option id="option_pic_position_other" value="Other" 
                                @if(isset($data['organization']) && isset($data['organization']->pic_position) && $data['organization']->pic_position != "Head pro" && $data['organization']->pic_position != "Director" && $data['organization']->pic_position != "Owner")
                                    selected="true"
                                @endif>Other</option>
            </select>
        </div>
    </div>
    <div class="form-group <?php if(isset($data['organization']) && isset($data['organization']->pic_position) && $data['organization']->pic_position != "Head pro" && $data['organization']->pic_position != "Director" && $data['organization']->pic_position != "Owner"){ echo '';}else echo 'hidden';
                                 ?>" id="other_position">
        <label for="pic_other_position" class="col-sm-2 col-md-2 control-label text-left">Other Position:<span class="red-flower">*</span></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="pic_other_position" name="pic_other_position" value="<?php if(isset($data['organization']) && isset($data['organization']->pic_position) && $data['organization']->pic_position != "Head pro" && $data['organization']->pic_position != "Director" && $data['organization']->pic_position != "Owner"){ echo $data['organization']->pic_position;}else echo '';
                                 ?>">
            <div class="help-block with-errors"></div>
        </div>
    </div>
    <div class="form-group">
        <label for="pic_email" class="col-sm-2 col-md-2 control-label text-left">Email:<span class="red-flower">*</span></label>
        <div class="col-sm-6">
            <input type="email" class="form-control" id="pic_email" name="pic_email" required
                @if(isset($data['organization']) && isset($data['organization']->pic_email))
                    value="{{$data['organization']->pic_email}}"
                @endif
            >
            <div class="help-block with-errors"></div>
        </div>
    </div>
    <div class="form-group">
        <label for="pic_phone" class="col-sm-2 col-md-2 control-label text-left">Cell Phone:<span class="red-flower">*</span></label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="pic_phone" name="pic_phone" required
                @if(isset($data['organization']) && isset($data['organization']->pic_phone))
                    value="{{$data['organization']->pic_phone}}"
                @endif
            >
            <div class="help-block with-errors"></div>
        </div>
    </div>
    <div class="form-group">
        <label for="pic_phone_other" class="col-sm-2 col-md-2 control-label text-left">Other Phone Number:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="pic_phone_other" name="pic_phone_other"
                @if(isset($data['organization']) && isset($data['organization']->pic_phone_other))
                    value="{{$data['organization']->pic_phone_other}}"
                @endif
            >
            <div class="help-block with-errors"></div>
        </div>
    </div>
    <div class="form-group">
        <label for="pic_jobtitle" class="col-sm-2 col-md-2 control-label text-left">Job Title:<span class="red-flower">*</span></label>
        <div class="col-sm-6">
            <select class="form-control ui dropdown" id="pic_jobtitle" name="pic_jobtitle" required>
                <option value="">Select Job </option>
                @if(isset($data['list_jobtitles']))
                    @foreach($data['list_jobtitles'] as $job)
                        <option value="{{$job->jobtitle}}"
                            @if(isset($data['organization']) && isset($data['organization']->pic_jobtitle) && $data['organization']->pic_jobtitle == $job->jobtitle)
                                    selected="true"
                                @endif
                        >{{$job->jobtitle}}</option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    
    
    
    <div class="col-sm-12 col-12 content-footer text-center">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <button class="btn btn-cancel" type="button">Cancel</button>
        <button class="btn btn-save" id="btn-save" type="submit">Save</button>
    </div>
</form>
    <div class="col-sm-12 col-md-12 col-lg-12 sub-organization">
        <div class="form-group big-label">
            <label class="col-sm-4 col-md-4 text-left">SUB ORGANIZATION</label>
        </div>
        <div class="table-container">
            <div class="table-header-wrapper clearfix">
                <div class="col-sm-4 col-md-4 col-lg-4 table-header border-right">NAME</div> 
                <div class="col-sm-2 col-md-2 col-lg-2 table-header sort-able border-right">LOGO</div> 
                <div class="col-sm-3 col-md-3 col-lg-3 table-header border-right">AREA/LOCATION</div> 
                <div class="col-sm-3 col-md-3 col-lg-3 table-header border-right">ACTION</div>  
            </div>
                <div id="table-scroll" class="mCustomScrollbar" data-mcs-theme="dark">
                    <table class="table table-striped">
                        @if(isset($data['sub_organizations']))
                            @foreach($data['sub_organizations'] as $suborganization)
                            <tr> 
                                <td class="col-sm-4 col-md-4 col-lg-4 sub-organization-name">
                                    {{$suborganization->organization_name}}
                                </td> 
                                <td class="col-sm-2 col-md-2 col-lg-2 logo">
                                    <img src="https://tournapp-cms-buck.s3-eu-west-1.amazonaws.com<?php echo $suborganization->organization_logo; ?>">
                                </td> 
                                <td class="col-sm-3 col-md-3 col-lg-3">
                                    {{$suborganization->country->country_name}}
                                 </td>
                                <td class="col-sm-3 col-md-3 col-lg-3 action">
                                    <button class="btn-pencil" type="button" value="{{$suborganization->id}}"></button>
                                    <a href="#{{$suborganization->id}}">Delete</a>
                                 </td>
                            </tr> 
                            @endforeach
                        @endif 
                        <tr> 
                            <td class="col-sm-4 col-md-4 col-lg-4 sub-organization-name">
                                
                            </td> 
                            <td class="col-sm-2 col-md-2 col-lg-2 ">
                                
                            </td> 
                            <td class="col-sm-3 col-md-3 col-lg-3">
                               
                             </td>
                            <td class="col-sm-3 col-md-3 col-lg-3 action">
                                <span class="btn-add-sub-organization">+ Add Sub Organization</span>
                             </td>
                        </tr> 
                        
                    </table>
                </div>
        </div>
    </div>
</div>

@endsection

@section ('modals')
<!-- Modal add sub organization -->
<div id="addSubOrganizationModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">CREATE SUB ORGANIZATION</h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" method="post" id="sub-organization-form" enctype="multipart/form-data">
                <input type="hidden" id="organization_id" name="organization_id" value="">
                <input type="hidden" id="parent_organization" name="parent_organization" 
                    @if(isset($data['organization']) && isset($data['organization']->id))
                        value="{{$data['organization']->id}}"
                    @endif
                >
                <input type="hidden" id="sport_id" name="sport_id" 
                    @if(isset($data['current_sport']) && isset($data['current_sport']->id))
                        value="{{$data['current_sport']->id}}"
                    @endif
                >

                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label for="organization_name" class="col-sm-3 col-md-3 control-label text-left">Organization Name:<span class="red-flower">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="organization_name" name="organization_name" value="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label for="" class="col-sm-3 col-md-3 control-label text-left">Sport:</label>
                        <div class="col-sm-8">
                            <span class="text">{{$data['current_sport']->sport_name}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="file" class="col-sm-3 col-md-3 control-label text-left">Logo:</label>
                        <div class="col-sm-8">
                           <div class="avatar-setup">
                            <img id="sub_thumbnil" alt="image" data-default-url="{{ asset('src/image/default-logo.png') }}" src="{{ asset('src/image/default-logo.png') }}" />
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 custom-file-upload">
                                <input type="file" name="sub_organization_logo" id="sub_organization_logo" class="inputfile" accept="image/*"  onchange="showMyImage(this, 'sub_thumbnil')" />
                                <label for="sub_organization_logo" class="label-file">Change Logo</label>    
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 custom-file-upload">
                                <button class="btn-remove" id="btn-remove-logo" type="button">Remove Logo</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group big-label">
                        <label class="col-sm-4 col-md-4 text-left">ORGANIZATION INFO</label>
                    </div>
                    <div class="form-group">
                        <label for="organization_website" class="col-sm-3 col-md-3 control-label text-left">Website:<span class="red-flower">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="organization_website" name="organization_website" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="organization_email" class="col-sm-3 col-md-3 control-label text-left">Email:<span class="red-flower">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="organization_email" name="organization_email" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="organization_phone" class="col-sm-3 col-md-3 control-label text-left">Phone Number:<span class="red-flower">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="organization_phone" name="organization_phone" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="organization_fax" class="col-sm-3 col-md-3 control-label text-left">Fax Number:<span class="red-flower">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="organization_fax" name="organization_fax" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="organization_address" class="col-sm-3 col-md-3 control-label text-left">Address:<span class="red-flower">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="organization_address" name="organization_address" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="organization_city" class="col-sm-3 col-md-3 control-label text-left">City:<span class="red-flower">*</span></label>
                        <div class="col-sm-3 col-md-3">
                            <input type="text" class="form-control" id="organization_city" required="" name="organization_city">
                            <div class="help-block with-errors"></div>
                        </div>
                        <label for="organization_state" class="col-sm-2 col-md-2 control-label text-left">State:<span class="red-flower">*</span></label>
                        <div class="col-sm-3 col-md-3">
                            <input type="text" class="form-control" id="organization_state" required="" name="organization_state">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="organization_zip" class="col-sm-3 col-md-3 control-label text-left">Zip:<span class="red-flower">*</span></label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="organization_zip" required="" name="organization_zip">
                            <div class="help-block with-errors"></div>
                        </div>
                        <label for="organization_country" class="col-sm-2 col-md-2 control-label text-left">Country:<span class="red-flower">*</span></label>
                        <div class="col-sm-3 col-md-3">
                            <select class="form-control ui dropdown" id="organization_country" name="organization_country" required>
                                <option value="">Select Country</option>
                                @if(isset($data['list_countries']))
                                    @foreach($data['list_countries'] as $country)
                                        <option value="{{$country->id}}"
                                            
                                        >{{$country->country_name}}</option>
                                    @endforeach
                                @endif  
                            </select>
                        </div>
                    </div>
                    <div class="form-group big-label">
                        <label for="" class="col-sm-4 col-md-4 text-left">PERSON IN CHARGE</label>
                    </div>
                    <div class="form-group">
                    <label for="pic_fullname" class="col-sm-3 col-md-3 control-label text-left">Name:<span class="red-flower">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pic_fullname" name="pic_fullname" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="pic_position" class="col-sm-3 col-md-3 control-label text-left">Position:<span class="red-flower">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-control ui dropdown" id="pic_position" name="pic_position" required>
                                <option value="">Select Position </option>
                                    @if(isset($data['list_positions']))
                                        @foreach($data['list_positions'] as $job)
                                            <option value="{{$job->position_name}}"
                                            >{{$job->position_name}}</option>
                                        @endforeach
                                    @endif
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div> --}}
                     {{-- <div class="form-group hidden" id="other_position">
                        <label for="pic_other_position" class="col-sm-3 col-md-3 control-label text-left">Other Position:<span class="red-flower">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pic_other_position" name="pic_other_position">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="pic_email" class="col-sm-3 col-md-3 control-label text-left">Email:<span class="red-flower">*</span></label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="pic_email" name="pic_email" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pic_phone" class="col-sm-3 col-md-3 control-label text-left">Cell Phone:<span class="red-flower">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pic_phone" name="pic_phone" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pic_phone_other" class="col-sm-3 col-md-3 control-label text-left">Other Phone Number:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pic_phone_other" name="pic_phone_other">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pic_jobtitle" class="col-sm-3 col-md-3 control-label text-left">Job Title:<span class="red-flower">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-control ui dropdown" id="pic_jobtitle" name="pic_jobtitle" required>
                                <option value="">Select Job</option>
                                @if(isset($data['list_jobtitles']))
                                    @foreach($data['list_jobtitles'] as $job)
                                        <option value="{{$job->jobtitle}}"
                                            
                                        >{{$job->jobtitle}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
        </div>
      <div class="modal-footer">
        <div class="form-group text-center">
          <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
          <button type="submit" id="btn-save" class="btn btn-green" >Save</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End modal -->
@endsection
