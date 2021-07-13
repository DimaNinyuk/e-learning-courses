@extends('layouts.apptutor')
@section('content')
<!-- start: Content -->
<div id="content" class="span10">

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>{{$course->name}}</h2>
                <div class="box-icon">

                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{ url('/update-course') }}" method="POST">
                @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Наименование курса</label>
                            <div class="controls">
                                <input name ="nameCourse" class="input-xlarge focused" id="focusedInput" type="text" value="{{$course->name}}">
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Описание</label>
                            <div class="controls">
                                <textarea name ="descriptionCourse" id="textarea2" rows="3" style="width: 700px;height: 250px;">{{$course->description}}</textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Максимальный балл</label>
                            <div class="controls">
                                <input name ="maxpoinCourse" class="input-xlarge focused" id="focusedInput" type="text" value="{{$course->maxpoint}}">
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{$course->id}}">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Обновить информацию</button>
                            
                        </div>
                    </fieldset>
                </form>

            </div>
            
            @foreach ($course->sliders()->orderBy('number')->get() as $slider)
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>{{$slider->name}}</h2>
                <div class="box-icon">

                </div>
            </div>
            <div class="box-content">
                
                <form class="form-horizontal" action="{{ url('/update-slider') }}" method="POST">
                @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Наименование задачи</label>
                            <div class="controls">
                                <input name ="nameSlider" class="input-xlarge focused" id="focusedInput" type="text" value="{{$slider->name}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Степень</label>
                            <div class="controls">
                                <input name ="numberSlider" class="input-xlarge focused" id="focusedInput" type="text" value="{{$slider->number}}">
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Описание</label>
                            <div class="controls">
                                <textarea name ="descritionSlider" id="textarea2" rows="3" style="width: 700px;height: 250px;">{{$slider->descrition}}</textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Максимальный балл</label>
                            <div class="controls">
                                <input name ="maxpointsSlider" class="input-xlarge focused" id="focusedInput" type="text" value="{{$slider->maxpoints}}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Минимальный балл</label>
                            <div class="controls">
                                <input name ="minpointsSlider" class="input-xlarge focused" id="focusedInput" type="text" value="{{$slider->minpoints}}">
                            </div>
                        </div>
                        <input type="hidden" name="slider_id" value="{{$slider->id}}">
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Обновить информацию</button>
                            <a class="btn btn-primary" href="/open-add-slider/{{$slider->id}}">Добавить задание</a>
                            
                        </div>
                    </fieldset>
                </form>
            </div>
           
            @endforeach
            <div class="box-header green" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Добавить тему</h2>
                <div class="box-icon">

                </div>
            </div>
            <div class="box-content">
                
                <form class="form-horizontal" action="{{ url('/add-slider') }}" method="POST">
                @csrf
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Наименование задачи</label>
                            <div class="controls">
                                <input name ="nameSlider" class="input-xlarge focused" id="focusedInput" type="text" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Степень</label>
                            <div class="controls">
                                <input name ="numberSlider" class="input-xlarge focused" id="focusedInput" type="text" >
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Описание</label>
                            <div class="controls">
                                <textarea name ="descritionSlider" id="textarea2" rows="3" style="width: 700px;height: 250px;"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Максимальный балл</label>
                            <div class="controls">
                                <input name ="maxpointsSlider" class="input-xlarge focused" id="focusedInput" type="text" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Минимальный балл</label>
                            <div class="controls">
                                <input name ="minpointsSlider" class="input-xlarge focused" id="focusedInput" type="text" >
                            </div>
                        </div>
                       
                        <div class="form-actions ">
                        <input type="hidden" name="course_id" value="{{$course->id}}">
                            <button type="submit" class="btn btn-primary green">Добавить тему</button>
                            
                        </div>
                    </fieldset>
                </form>
            </div>
           
          

        </div>
    </div>
</div>
<!--/.fluid-container-->



@endsection