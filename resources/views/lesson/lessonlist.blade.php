        <!-- Features -->
        <div class="features-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 features section-description wow fadeIn">
	                    <h2>บทเรียนของเรา</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>

@foreach ($lessons as $lesson)
	            @if($lesson->newRow)
	            <div class="row">
	            @endif
                	<a class="col-sm-4 features-box {{$lesson->grey}} wow fadeInUp" href="/lesson/{{$lesson->id}}">
	                	<img src="assets/img/lessons/{{$lesson->code}}.png" alt="">
	                    <h3>{{$lesson->name}}</h3>
	                    <p>{{$lesson->description}}</p>
                    </a>
                    
                @if($lesson->endRow)
	            </div>
	            @endif
@endforeach
	        </div>
        </div>

<!--
<table style="width:100%">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>DESCRIPTION</th>
		<th>VIDEO URL</th>
		<th>DOCUMENT URL</th>
		<th>IMAGE NAME</th>
		<th>ORDER</th>
	</tr>
	@foreach ($lessons as $lesson)
	<tr>
		<th>{{$lesson->id}}</th>
		<th><a href="lesson/{{$lesson->id}}">{{$lesson->name}}</a></th>
		<th>{{$lesson->description}}</th>
		<th>{{$lesson->videoUrl}}</th>
		<th>{{$lesson->documentUrl}}</th>
		<th>{{$lesson->imageName}}</th>
		<th>{{$lesson->order}}</th>
	</tr>
	@endforeach
</table>
-->