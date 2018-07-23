@extends('admin.layouts.admin')
@section('content')
    <style>
        #faq_etc td {
            padding: 15px;
            padding-right: 20px;
        }

        #faq_etc input {
            overflow-x: auto;
            -ms-overflow-x: auto;
            overflow-y: auto;
            -ms-overflow-y: auto;
            text-overline: ellipsis;
            width: 100%;
            height: 20px;
        }

        div {
            vertical-align: middle;
        }

        .help-block {
            color: red;
            font-size: 13px;
            text-align: left;
        }
    </style>
    <div id="faq_etc" class="infoput">
        <div class="container" style="margin: 0 5%;">
            <h1 class="infoputheader"><strong>※ {{ $data->question}} 기타 수정</strong></h1>
            <form id="faq_etc-form" method="POST"
                  action="{{ route('admin.faq_etc.update', $data->id) }}"
                  enctype="multipart/form-data">
                {!! method_field('PUT') !!}
                {!! csrf_field() !!}
                <div class="row">
                    <table>
                        <tr>
                            <td class="datainput"><label for="question">질문</label></td>
                            <td>
                                <input type="text" id="question" name="question" class="form-control"
                                       placeholder="제목을 입력해주세요." size="100%"
                                       value="{{old('question', $data->question)}}">
                                @if ($errors->has('question'))
                                    <div class="help-block">
                                        {{ $errors->first('question') }}
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="datainput"><label for="answer">답변</label></td>
                            <td>
                                <textarea id="answer" class="form-control" name="answer" cols="100%"
                                          placeholder="답변을 입력해주세요.">{{ old('answer',$data->answer)}}</textarea>
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
                                       value="{{old('video_url', $data->video_url)}}">
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
                                <select id="classification" name="classification" form="faq_etc-form">
                                    <option value="null" selected disabled>선택해주세요</option>
                                    <option class="listed" value="faq_registration"
                                            @if($data->classification == 'faq_registration') selected
                                            @endif>등기</option>
                                    <option class="listed" value="faq_bankruptcy"
                                            @if($data->classification == 'faq_bankruptcy') selected
                                            @endif>개인 파산</option>
                                    <option class="listed" value="faq_rehabilitation"
                                            @if($data->classification == 'faq_rehabilitation') selected
                                            @endif>개인 회생</option>
                                    <option class="listed" value="faq_etc"
                                            @if($data->classification == 'faq_etc') selected
                                            @endif>기타 항목</option>
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
                                <button type="submit" form="faq_etc-form" class="btn btn-success">
                                    저장하기
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
@endsection