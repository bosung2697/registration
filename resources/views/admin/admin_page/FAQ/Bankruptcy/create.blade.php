@extends('admin.layouts.admin')
@section('content')
    <div id='library' class="infoput">
        <div class="container">
            <h1 class="infoputheader"><strong>※ 개인 파산</strong></h1>
            <form id="faq_bankruptcy-form" method="POST" action="{{route('admin.faq_bankruptcy.store')}}"
                  enctype="multipart/form-data">
                {!!csrf_field()!!}
                <div class="row">
                    <table>
                        <tr>
                            <td class="datainput"><label for="question">질문</label></td>
                            <td class="form_content">
                                <input type="text" id="question" name="question" class="form-control"
                                       placeholder="질문을 입력해주세요." size="100%" value="{{old('question')}}">
                                @if ($errors->has('question'))
                                    <div class="help-block">
                                        {{ $errors->first('question') }}
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="datainput"><label for="answer">답변</label></td>
                            <td class="form_content">
                                <textarea id="answer" class="form-control" name="answer" cols="100%"
                                          placeholder="답변을 입력해주세요.">{{ old('answer')}}</textarea>
                                @if ($errors->has('answer'))
                                    <div class="help-block">
                                        {{ $errors->first('answer') }}
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="datainput"><label for="video_url">영상 URL : </label></td>
                            <td class="form_content">
                                <input type="text" id="video_url" name="video_url" class="form-control"
                                       placeholder="(예시: https://www.youtube.com/embed/example)와 같이 입력해주세요" size="100%"
                                       value="{{old('video_url')}}">
                                @if ($errors->has('video_url'))
                                    <div class="help-block">
                                        {{ $errors->first('video_url') }}
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="datainput"><label for="classification">항목 분류</label></td>
                            <td class="form_content">
                                <select id="classification" name="classification" form="faq_bankruptcy-form">
                                    <option value="null" selected disabled>선택해주세요</option>
                                    <option class="listed" value="faq_registration">
                                        등기
                                    </option>
                                    <option class="listed" value="faq_bankruptcy">
                                        개인 파산
                                    </option>
                                    <option class="listed" value="faq_rehabilitation">
                                        개인 회생
                                    </option>
                                    <option class="listed" value="faq_etc">
                                        기타 항목
                                    </option>
                                </select>
                                @if ($errors->has('classification'))
                                    <div class="help-block">
                                        {{ $errors->first('classification') }}
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="savebutton" colspan="2">
                                <button type="submit" class="btn btn-success">저장하기
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
@endsection