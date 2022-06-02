<style>
    .blue-bg {
        background: hsla(208, 33%, 21%, 1);
        background: linear-gradient(90deg, hsla(208, 33%, 21%, 1) 0%, hsla(211, 36%, 46%, 1) 100%);
        background: -moz-linear-gradient(90deg, hsla(208, 33%, 21%, 1) 0%, hsla(211, 36%, 46%, 1) 100%);
        background: -webkit-linear-gradient(90deg, hsla(208, 33%, 21%, 1) 0%, hsla(211, 36%, 46%, 1) 100%);
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#243748", endColorstr="#4B749F", GradientType=1);
    }

</style>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 blue-bg">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
