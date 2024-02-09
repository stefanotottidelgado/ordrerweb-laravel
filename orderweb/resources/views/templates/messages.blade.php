<div class="row">
    <div class="col-lg-12">
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss= "alert" aria-label="Close">
                    <span arial-hidden="true">&times;</span>
                </button>
            </div>            
        @endif
        @if (session('warning'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('warning') }}
                <button type="button" class="close" data-dismiss= "alert" aria-label="Close">
                    <span arial-hidden="true">&times;</span>
                </button>
            </div>            
        @endif 
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss= "alert" aria-label="Close">
                    <span arial-hidden="true">&times;</span>
                </button>
            </div>            
        @endif
    </div>    
</div>
<div class="row">
    <div class="col-lg-12">
        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>    
</div>
