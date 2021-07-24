@extends('layouts.app')

@section('content')

<div class="bg-white p-4 w-2/3 mx-auto">
    <h2 class="text-center text-2xl">Upload your dog!</h2>
    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <p class="mt-1 text-sm text-gray-600">
                        Fill in the appropriate fields to store your Personal Doggo.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="/pictures" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nameId" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" name="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="nameid" placeholder="Dog Name">
                                </div>

                                <div class=" col-span-6 sm:col-span-3">
                                    <label for="imageid" class="block text-sm font-medium text-gray-700">Image</label>
                                    <div class="col-sm-9">
                                        <input name="image" type="file" id="imageid" class="custom-file-input mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        <span class="custom-file-control"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    @endsection