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
            <h1>${  }</h1>
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
