
<style>
    *body{
        text-align: center;
    }
</style>
<h4>Basic calculator</h4>
<form method="post" action="{{route('calculator.calculation')}} ">
    @csrf
    <input type="number" name="numberOne" style="margin-bottom: 10px;height: 25px">
    <br>
    <input type="number" name="numberTow" style="margin-bottom: 10px;height: 25px">
    <br>
    <select name="calculation" style="width: 50px">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="submit" value="=" style="width: 50px">
</form>
<p>Result = {{$result}} </p>



