@component('mail::message')
# Examination Review for {{$exam}}

You have been assigned to review the lecturer's first draft for the above examination, you have
until the {{$deadline}} to submit your review on the Exam management system.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
