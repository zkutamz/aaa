@Extends('layout')
@section('admin_content')

                            
                                  <div class="row">
                                      <div class="col-sm-12">
                                    <form onsubmit="return check()" action="{{URL::to('properties-update')}}" method="post">
                                        <div class="container">
                                            {{csrf_field()}}
                                            <label for="post_show"><b>Số ký tự tiêu đề tối thiểu</b></label>
                                            <input type="number" placeholder="Số lượng ký tự" name="title_min" pattern="[1-9]{1,3}" value="{{$properties->seo_title_min}}" required>
                                            <br>
                                            <label for="post_show"><b>Số ký tự tiêu đề tối đa</b></label>
                                            <input type="number" placeholder="Số lượng ký tự" name="title_max" value="{{$properties->seo_title_max}}" required>
                                            <br>
                                            <label for="post_show"><b>Số ký tự mô tả tối thiểu</b></label>
                                            <input type="number" placeholder="Số lượng ký tự" name="description_min" value="{{$properties->seo_description_min}}" required>
                                             <br>
                                            <label for="post_show"><b>Số ký tự mô tả tối đa</b></label>
                                            <input type="number" placeholder="Số lượng ký tự" name="description_max" value="{{$properties->seo_description_max}}" required>
                                             <br>
                                            <label for="post_show"><b>Số lượng bài viết hiển thị</b></label>
                                            <input type="number" placeholder="Số lượng bài viết" name="post_show" value="{{$properties->number_posts_show}}" required>
                                             <br>
                                            <label for="post_load"><b>Số ngày thay đổi bài viết</b></label>
                                            <input type="number" placeholder="Số ngày" name="day_change_posts"  value="{{$properties->day_change_posts_show}}" required>
                                             <br>
                                            <label for="post_show"><b>Ngày bắt đầu</b></label>
                                            <input type="text"  name="original_date" value="{{$properties->original_date}}" readOnly>
                                            <label for="post_load"><b>Ngày kết thúc</b></label>
                                            <input type="text"  name="change_date"  value="{{$properties->change_date}}" readOnly>
                                            <label for="post_load"><b>Ngày cập nhật</b></label>
                                            <input type="text" readOnly  name="change_date"  value="{{$properties->updated_at}}" required>
                                            <button type="submit">Cập nhật</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                <script>
                                    function check(){
                                        //Số ký tự tiêu đề tối thiểu 
                                        let titleMin = parseInt(document.getElementsByName("title_min")[0].value);
                                        

                                        if(!Number.isInteger(titleMin)||titleMin < 0){
                                            alert("Số ký tự tiêu đề tối thiểu phải lớn hơn 0.");
                                            return false;
                                        }
                                        
                                        // //Số ký tự tiêu đề tối đa 
                                        let titleMax = parseInt(document.getElementsByName("title_max")[0].value);
                                        if(Number.isInteger(titleMax)==false){
                                            alert("Số ký tự tiêu đề tối đa phải là số.");
                                            return false;
                                        }else{
                                            if(titleMax < 0){
                                                alert("Số ký tự tiêu đề tối đa phải lớn hơn 0.");
                                                return false;
                                            }
                                            else if(titleMax < titleMin){
                                                 alert("Số ký tự tiêu đề tối đa phải lớn hơn số ký tự tiêu đề tối thiểu.");
                                                return false;
                                            }
                                        }
                                        
                                        //Số ký tự mô tả tối thiểu 
                                        let descriptionMin = parseInt(document.getElementsByName("description_min")[0].value);
                                        if(!Number.isInteger(descriptionMin)||descriptionMin < 0){
                                            alert("Số ký tự mô tả tối thiểu phải lớn hơn 0.");
                                            return false;
                                        }
                                        //Số ký tự mô tả tối đa
                                        let descriptionMax = parseInt(document.getElementsByName("description_max")[0].value);
                                        if(!Number.isInteger(descriptionMax)){
                                            alert("Số ký tự mô tả tối đa phải là số.");
                                            return false;
                                        }else{
                                            if(descriptionMax < 0){
                                                alert("Số ký tự mô tả tối đa phải lớn hơn 0.");
                                                return false;
                                            }
                                            else if(descriptionMax < descriptionMin){
                                                 alert("Số ký tự mô tả tối đa phải lớn hơn số ký tự mô tả tối thiểu.");
                                                return false;
                                            }
                                        }
                                        //Số bài viết hiển thị
                                        let postShow = parseInt( document.getElementsByName("post_show")[0].value);
                                        if(!Number.isInteger(postShow)||postShow < 0){
                                            alert("Số bài viết hiển thị phải lớn hơn 0.");
                                            return false;
                                        }
                                        //Số ngày thay đổi bài viết
                                        let dayChange = parseInt( document.getElementsByName("day_change_posts")[0].value);
                                        if(!Number.isInteger(dayChange)||dayChange < 0){
                                            alert("Số ngày thay đổi bài viết phải lớn hơn 0.");
                                            return false;
                                        }
                                    }
                                </script>
@endsection