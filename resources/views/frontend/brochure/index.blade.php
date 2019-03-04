@extends('frontend.layouts.master')
@section('title', 'Brochure')

@section('content')
    <div class="" id="container"></div>
@endsection

@section('styles')
    <style type="text/css">
        body {
            background-color: #333;
            margin: 0;
            padding: 0;
        }

        #header,.demo-msg {
            display: none !important;
        }
        #container {
            height: 95vh;
            width: 95%;
            margin: 20px auto;
            /*border: 2px solid red;
            box-shadow: 0 0 5px red;*/
        }
        .fullscreen {
            background-color: #333;
        }
        .examples {
            position: relative;
        }
        .examples div {
            position: absolute;
            text-align: center;
            width: 100%;
            padding-top: 10px;
            font-size: 20px;
        }
        .examples a {
            color: #ccc;
            text-decoration: none;
            padding: 0 10px;
        }
        .examples a:hover {
            color: #fff;
        }
    </style>
@endsection

@section('scripts')
    <script src="{{ asset('frontend/js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('frontend/js/three.min.js') }}"></script>
    <script src="{{ asset('frontend/js/pdf.min.js') }}"></script>
    <script src="{{ asset('frontend/js/3dflipbook.min.js') }}"></script>
    <script >
        PDFJS.workerSrc ="{{ asset('frontend/js/pdf.worker.js') }}";

        $(".demo-msg").css("display","none");

        $('#container').FlipBook({
            pdf: '{{ asset('frontend/brochure/GeoSmartOne-Brochure-full.pdf') }}',

            pages: 10,
            template: {
                html: '{{ asset('frontend/templates/default-book-view.html') }}',
                styles: [
                    '{{ asset('frontend/css/white-book-view.css') }}'
                ],
                links: [
                    {
                        rel: 'stylesheet',
                        href: '{{ asset('frontend/css/font-awesome.min.css') }}'
                    }
                ],
                script: '{{ asset('frontend/js/default-book-view.js') }}'
            }
        });
    </script>
@endsection
