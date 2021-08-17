<div style="background-color: black; background-image: url('{{ asset('/img/bckgrnd.png') }}'); background-repeat:no-repeat; background-position:center;"
    class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div>
        {{ $slot }}
    </div>
</div>
