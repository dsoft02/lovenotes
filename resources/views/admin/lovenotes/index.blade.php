@extends('admin.layouts.app')

@push('styles')
<style>

/* Main container to control size and responsiveness */
.insta-post {
    width: 100%;
    max-width: 480px;
    aspect-ratio: 1 / 1;
    position: relative;
    overflow: hidden;
    margin: auto;
}

/* Background image styling */
.background-image {
    width: 100%;
    height: 100%;
    background-image: url('{{ asset("assets/img/lovenotesbg.png") }}');
    background-size: cover;
    background-position: center;
    filter: brightness(0.6);
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

/* Centered white box overlay for text */
.text-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    max-height: 70%;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 8px;
    padding: 10px;
    font-family: Arial, sans-serif;
    font-size: 14px;
    color: #333;
    overflow-y: auto;
    z-index: 2;
    box-sizing: border-box;
}


.text-overlay {
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    font-size: clamp(10px, 2vw, 14px);
}

.text-overlay p {
    margin: 0;
}

/* Heart icon styling (positioned on top of the text overlay)*/
.heart-icon {
    position: absolute;
    top: calc(50% - 40%);
    right: 5%;
    font-size: 48px;
    color: red;
    z-index: 3;
    transform: rotate(30deg);
}

</style>
@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Contact Messages
        <small>View Message</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
        <li><a href="{{ route('admin.lovenotes') }}">Contact Messages</a></li>
        <li class="active">View Message</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">View Message</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <a href="{{ route('admin.lovenotes') }}" class="btn bg-navy" title="" data-original-title="Back">
                            <i class="fa fa-undo"> </i> Back</a>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="mailbox-read-info">
                        <h3>Subject: Love note to my baby</h3>
                        <h5>From: {{ ucwords($lovenote->name) }} | Age: {{ $lovenote->age ?: '-' }} | Gender: {{ $lovenote->gender ?: '-' }}
                            <span class="mailbox-read-time pull-right">{{ $lovenote->created_at->format('d M. Y h:i A') }}</span>
                        </h5>
                    </div>
                        <!-- Main post container -->
                        <div class="insta-post">
                            <div class="background-image"></div> <!-- Background image -->

                            <!-- White text overlay container -->
                            <div class="text-overlay">
                                <p>
                                 <strong>
                                    {{ $lovenote->name }}
                                    {{ $lovenote->age > 0 ? $lovenote->age . ' years' : '' }}
                                    {{ ($lovenote->gender && strtolower($lovenote->gender) !== 'none') ? $lovenote->gender : '' }}
                                  </strong>
                                <p>
                                    {!! $lovenote->message !!}
                                </p>
                            </div>

                            <!-- Heart icon (optional) -->
                            <div class="heart-icon">❤️</div>
                        </div>

                </div>
                <!-- /.box-footer -->
                <div class="box-footer">
                    <!-- Export Button -->
                    <a href="{{ route('admin.lovenotes.export', $lovenote->id) }}" class="btn btn-primary"><i class="fa fa-download"></i> Export as Image</a>
                    <form action="{{ route('admin.lovenotes.destroy', $lovenote->id) }}" method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this message?');">
                            <i class="fa fa-trash-o"></i> Delete
                        </button>
                    </form>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    document.getElementById('exportButton').addEventListener('click', function() {

        html2canvas(document.querySelector("body"), {
            useCORS: true,
            scale: 5,
            allowTaint: true
        }).then(function(canvas) {
            var img = canvas.toDataURL("image/png");
            var link = document.createElement('a');
            link.href = img;
            link.download = 'insta-post.png';
            link.click();
        });

    });
</script>
@endpush
