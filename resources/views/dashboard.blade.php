<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <div>
                @include('chatGPT.index')
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
