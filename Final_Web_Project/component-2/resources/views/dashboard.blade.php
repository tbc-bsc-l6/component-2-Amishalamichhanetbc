<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in.
                </div>
                <h4> Please click on the link below to view the respective lists. </h4>
                <nav>
      <ol>
        <li>
          <a href="book" title="book">Book</a>
        </li>
        <li>
          <a href="cd" title="cd">CD</a>
        </li>
        <li>
          <a href="game" title="game">Game</a>
        </li>
       
      </ol>
    </nav>
            </div>
        </div>
    </div>
</x-app-layout>
