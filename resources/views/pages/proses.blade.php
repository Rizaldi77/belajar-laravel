@extends('layouts.main');
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h2>No Urut : </h2>
                    @if ($input == '1')
                        <h1>A-01</h1>
                        <h4>Tunggu antrian di Loket 1</h4>
                        @elseif ($input == '2')
                            <h1>B-01</h1>
                            <h4>Tunggu antrian di Loket 2</h4>
                        @elseif ($input == '3')
                            <h1>C-01</h1>
                            <h4>Tunggu antrian di Loket 3</h4>
                        @elseif ($input == '4')
                            <h1>D-01</h1>
                            <h4>Tunggu antrian di Loket 4</h4>
                        @elseif ($input == '5')
                            <h1>E-01</h1>
                            <h4>Tunggu antrian di Loket 5</h4>
                        @elseif ($input == '6')
                            <h1>F-01</h1>
                            <h4>Tunggu antrian di Loket 6</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>