<style>
    table,tr,td {
        border: 1px solid black;
    }
</style>

@extends('layouts.red')

@section('container1')
<fieldset>
    <table>
        <tr>
            <td>11</td>
            <td>12</td>
            <td>13</td>
        </tr>
        <tr>
            <td>21</td>
            <td>22</td>
            <td>23</td>
        </tr>
    </table>
</fieldset>
@endsection

@section('container2','This is red container')