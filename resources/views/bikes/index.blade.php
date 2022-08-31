<style>
    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    .aa{
        display:flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        width: 120px;
        height: 50px;
        border: 1px solid gray;
        border-radius: 12px;
        background-color: rgb(255, 242, 226);
        margin: 0 auto;
    }
    a{
        text-decoration: none;
          
    }
</style>

<h2>這是bikeController</h2>
<div class="aa">
    <a href="/student/index">create btn</a>
</div>
<br>
<div class="aa">
    <a href="{{route('bikes.create')}}">create btn</a>
</div>
<br>
<div class="aa">
    <a href="{{route('bikes.edit',['bike'=>1,'test'=>123])}}">edit btn</a>
</div>

<a href="{{route('student')}}">student btn</a> --}}
<br>
{{$data['v1']}}
<br>
{{$data['v2']}}
<br>

    
    @for($i=1; $i<=10; $i++)
        <a href="{{route('bikes.edit',['bike'=>$i])}}">
        <button>edit{{$i}}</button>
        </a>
    @endfor

    @foreach ($data['myArr'] as $key => $value)
    <a href="http://">{{$value}}</a>
    @endforeach