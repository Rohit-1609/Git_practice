@extends('layouts.app')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> Show User</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>

        </div>

    </div>

</div>


<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

           <h3> <strong>Name:-     </strong>

            {{ $user->name }}
            </h3>
        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

           <h3> <strong>Email:-     </strong>

            {{ $user->email }}
            </h3>
        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

   <h3> <strong>Username:-     </strong>

    {{ $user->username }}
    </h3>
</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

   <h3><strong>Firstname:-     </strong>

    {{ $user->firstname }}
    </h3> 
</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

  <h3> <strong>lastname:-     </strong>

    {{ $user->lastname }}
    </h3> 
</div>

</div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

           <h3> <strong>Roles:-     </strong>

            @if(!empty($user->getRoleNames()))

                @foreach($user->getRoleNames() as $v)

                    <label class="badge badge-success">{{ $v }}</label>

                @endforeach

            @endif
            </h3>
        </div>

    </div>

</div>

@endsection