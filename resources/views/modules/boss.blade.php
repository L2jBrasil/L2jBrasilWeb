@extends('core.app')

@section('css')

@endsection

@section('content')

<div class="container youplay-content">
    <div class="titlepgs">
        GrandBoss Status
    </div>
    <div class="boxpgs">
        <table class="table table-hover">
            <thead class="tbrank boss">
                <tr>
                    <th>Boss Name</th>
                    <th>Boss LvL</th>
                    <th>Status</th>
                    <th>Respawn Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($boss as $b)
                <tr>
                    <td>{{ $b->name }}</td>
                    <td>{{ $b->level }}</td>
                    <td>
                           @if($b->status == 0)
                           Vivo
                           @else
                           Morto
                           @endif 
                    </td>
                    <td>
                            @if($b->status == 0)
                            -
                            @else
                            {{ 
                                \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $b->updated_at)->addSecond($b->respawn_time)
                            }} 
                            @endif 

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="titlepgs margin-top">
        Raid Boss Status
    </div>
    <div class="boxpgs">
        <table class="table table-hover">
            <thead class="tbrank boss">
                <tr>
                    <th>Boss Name</th>
                    <th>Boss LvL</th>
                    <th>Status</th>
                    <th>Respawn Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rboss as $rb)
                <tr>
                    <td>{{ $rb->name }}</td>
                    <td>{{ $rb->level }}</td>
                    <td>
                           @if($rb->respawn_time == 0)
                           Vivo
                           @else
                           Morto
                           @endif 
                    </td>
                    <td>
                            @if($rb->respawn_time == 0)
                            -
                            @else
                            {{ 
                                
                                $rb->respawn_time / 3600
                            
                            }} Horas
                            @endif 

                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
        {{ $rboss->links() }}
        </div>
    </div>
</div>

@endsection