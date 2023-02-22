@extends('layout.app')

@section('title')Про нас@endsection

@section('content')
    @include('partials.header')
    <h3 class="ml-8 p-4 inline-block text-1xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">Про "MedWarden"</h1>
    <p class="border-t-double border-orange-700 border-b-8 rounded-sm w-1/2 mt-2 m-9 pl-2 text-justify text-lg text-slate-700 dark:text-slate-400">У час пандемії та війни люди потребують швидку медичну допомогу. Однією з проблем з визначенням вірусних захворювань є те, що часто бракує розуміння самого вірусу. Багато вірусів не мають чіткого визначення, а їхній вплив може суттєво відрізнятися від людини до людини. Крім того, ознаки та симптоми вірусної інфекції можуть бути схожими на симптоми інших захворювань, що ускладнює діагностику. Крім того, деякі віруси можуть залишатися невиявленими протягом тривалого часу, що ускладнює їх виявлення та лікування. Крім того, лікування вірусних захворювань може відрізнятися залежно від типу вірусу та його тяжкості, що ускладнює розробку єдиного підходу до лікування вірусних інфекцій.</p>
    @include('partials.footer')
@endsection