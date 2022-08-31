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
    <a href="{{route('bikes.edit',['bike'=>1])}}">edit btn</a>
</div>