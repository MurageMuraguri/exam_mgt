@component('mail::message')
    # Examination Assignment - {{$exam}}

    You have been assigned to the first draft first draft for the above examination, you have
    until the {{$deadline_1}} to submit your review on the Exam management system, and subsequently on the
    {{$deadline_1}} to submit the final draft after review.


    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
