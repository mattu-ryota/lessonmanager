@extends('layouts.app')

@section('content')
    <div style="width:100%">
        <v-sheet
            tile
            height="54"
            class="d-flex"
        >
            <v-btn
                icon
                class="ma-2"
                @click="$refs.calendar.prev()"
            >
                <v-icon>mdi-chevron-left</v-icon>
            </v-btn>
            <v-spacer></v-spacer>
            <h1>${ title }</h1>
            <v-spacer></v-spacer>
            <v-btn
                icon
                class="ma-2"
                @click="$refs.calendar.next()"
            >
                <v-icon>mdi-chevron-right</v-icon>
            </v-btn>
        </v-sheet>
        <v-sheet height="600">
            <v-calendar
                ref="calendar"
                locale="ja-jp"
                :day-format="timestamp => new Date(timestamp.date).getDate()"
                :month-format="timestamp => (new Date(timestamp.date).getMonth() + 1) + ' /'"
                v-model="value"
                :weekdays="weekday"
                :type="type"
                :events="events"
                :event-overlap-mode="mode"
                :event-overlap-threshold="30"
                @click:date="showDay"
            ></v-calendar>
        </v-sheet>
    </div>   
@endsection
@section('events')
@foreach($Tasks as $Task)
    
    
{     
    name: "{{$Task->name}}",
    start: '{{$Task->deadline}}',
    color:"{{$Task->getColor()}}",
    timed: false,
},
@endforeach   
@endsection