@extends('layouts.app')

@section('content')
    <v-container>
        <v-row dense>
            @foreach($daylessons as $key=>$lesson)
                <v-col cols="12">
                    <v-card
                        color="#cfe3d0"
                        @click="goLesson(1)"
                    >
                        <v-card-title class="text-h5">
                            {{$key}}:　{{$lesson}}
                        </v-card-title>
                        <v-card-subtitle></v-card-subtitle>
                        <v-card-actions>
                            <v-btn text>
                                click
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-col>
            @endforeach
        </v-row>
    </v-container>
@endsection
