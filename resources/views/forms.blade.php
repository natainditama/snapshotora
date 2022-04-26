<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
        <title>Form Components | UBold - Responsive Admin Dashboard Template</title>
    </head>
    <body class="bg-gray-100 text-slate-700">
        <main class="antialiased w-full min-h-screen">
            <div class="container mx-auto py-24 px-3">
                {{-- Site Title --}}
                <header class="flex justify-between items-center">
                    <h3 class="font-semibold text-xl">Basic Elements</h3>
                    <ul class="flex text-sm items-center text-slate-700/50">
                        <li class="py-1 px-2 text-slate-700/90">
                            <a href="#">Ubold</a>
                        </li>
                        <li class="text-xs">
                            <i class="fa-regular fa-angle-right"></i>
                        </li>
                        <li class="py-1 px-2 text-slate-700/90">
                            <a href="#">Forms</a>
                        </li>
                        <li class="text-xs">
                            <i class="fa-regular fa-angle-right"></i>
                        </li>
                        <li class="py-1 px-2">
                            <a href="#">Basic Elements</a>
                        </li>
                    </ul>
                </header>
                {{-- End Site Title --}}
                {{-- Section 1 --}}
                <section class="bg-white p-6 rounded-lg mt-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <header class="md:col-span-2 flex flex-col">
                            <h5 class="font-medium">Input Types</h5>
                            <p class="text-sm text-slate-700/50">Most common form control, text-based input fields. Includes support for all HTML5 types: 
                                <code class="text-xs text-[#f672a7]">text</code>,
                                <code class="text-xs text-[#f672a7]">password</code>,
                                <code class="text-xs text-[#f672a7]">datetime</code>,
                                <code class="text-xs text-[#f672a7]">datetime-local</code>,
                                <code class="text-xs text-[#f672a7]">date</code>,
                                <code class="text-xs text-[#f672a7]">month</code>,
                                <code class="text-xs text-[#f672a7]">time</code>,
                                <code class="text-xs text-[#f672a7]">week</code>,
                                <code class="text-xs text-[#f672a7]">number</code>,
                                <code class="text-xs text-[#f672a7]">email</code>,
                                <code class="text-xs text-[#f672a7]">url</code>,
                                <code class="text-xs text-[#f672a7]">search</code>,
                                <code class="text-xs text-[#f672a7]">tel</code>, and
                                <code class="text-xs text-[#f672a7]">color</code>.
                            </p>
                        </header>
                        <form class="flex flex-col gap-6" autocomplete="off">
                            <div class="flex flex-col gap-2">
                                <label for="text-input" class="block text-sm font-medium">Text</label>
                                <input type="text" id="text-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="email-input" class="block text-sm font-medium">Email</label>
                                <input type="email" id="email-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Email">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="password-input" class="block text-sm font-medium">Password</label>
                                <input type="password" id="password-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" value="Password">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="show-input" class="block text-sm font-medium">Show/Hide Password</label>
                                <div class="flex flex-row">
                                    <input type="password" id="show-input" class="bg-white border border-gray-300 text-sm rounded-l block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Enter your password">
                                    <button type="button" class="h-full aspect-[1.25/1] bg-[#F7F7F7] rounded-r border border-gray-300 border-l-0 text-slate-700/70 grid place-items-center focus:outline-none">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="placeholder-input" class="block text-sm font-medium">Placeholder</label>
                                <input type="text" id="placeholder-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="placeholder">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="textarea-input" class="block text-sm font-medium">Text area</label>
                                <textarea type="text" id="textarea-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" rows="5"></textarea>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="readonly-input" class="block text-sm font-medium">Readonly</label>
                                <input type="text" id="readonly-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" value="Readonly value" readonly>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="disable-input" class="block text-sm font-medium">Disable</label>
                                <input type="text" id="disable-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" value="Disable value" disabled>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="static-input" class="block text-sm font-medium">Static control</label>
                                <input type="text" id="static-input" class="bg-white text-sm block w-full py-2" readonly value="email@example.com">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="helping-input" class="block text-sm font-medium">Helping Text</label>
                                <input type="text" id="helping-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Helping text">
                                <span class="text-xs">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                            </div>
                        </form>
                        <form class="flex flex-col gap-6" autocomplete="off">
                            <div class="flex flex-col gap-2">
                                <label for="select-input" class="block text-sm font-medium">Input Select</label>
                                <select id="select-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="multiple-input" class="block text-sm font-medium">Multiple  Select</label>
                                <select id="multiple-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" multiple>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="file-input" class="block text-sm font-medium">Default file input</label>
                                <input type="file" id="file-input" class="relative bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 pl-24 focus:outline-none focus:border-gray-500 file:absolute file:inset-0 file:border-0 file:px-3 file:text-slate-700/70">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="date-input" class="block text-sm font-medium">Date</label>
                                <input type="date" id="date-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="month-input" class="block text-sm font-medium">Month</label>
                                <input type="month" id="month-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="time-input" class="block text-sm font-medium">Time</label>
                                <input type="time" id="time-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="week-input" class="block text-sm font-medium">Week</label>
                                <input type="week" id="week-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="number-input" class="block text-sm font-medium">Number</label>
                                <input type="number" id="number-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500 invalid:border-red-500">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="color-input" class="block text-sm font-medium">Color</label>
                                <input type="color" id="color-input" class="h-[39px] bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" value="#727cf5">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="range-input" class="block text-sm font-medium">Range</label>
                                <input type="range" id="range-input" class="apperance-none bg-transparent text-sm rounded block w-full py-2 px-3 focus:outline-none" min="0" max="100">
                            </div>
                        </form>
                    </div>
                </section>
                {{-- End Section 1 --}}
                {{-- Section 2 --}}
                <section class="bg-white p-6 rounded-lg mt-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <form class="flex flex-col gap-6" autocomplete="off">
                            <header class="flex flex-col">
                                <h5 class="font-medium">Select menu</h5>
                                <p class="text-sm text-slate-700/50">
                                    Custom
                                    <code class="text-xs text-[#f672a7]">&lt;select&gt;</code>
                                    menus need only a custom class, <code class="text-xs text-[#f672a7]">.form-select</code>
                                    to trigger the custom styles. 
                                </p>
                            </header>
                            <div class="flex flex-col gap-2">
                                <select class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500">
                                    <option value="1">Open this select menu</option>
                                    <option value="2">One</option>
                                    <option value="3">Two</option>
                                    <option value="4">Three</option>
                                </select>
                            </div>
                            <header class="flex flex-col">
                                <h5 class="font-medium">Switches</h5>
                                <p class="text-sm text-slate-700/50">
                                    A switch has the markup of a custom checkbox but uses the 
                                    <code class="text-xs text-[#f672a7]">.form-switch</code>
                                    class to render a toggle switch. Switches also support the 
                                    <code class="text-xs text-[#f672a7]">disabled</code>
                                     attribute.
                                </p>
                            </header>
                            <div class="flex justify-start">
                                <button type="button" class="relative flex items-center gap-2" >
                                    <input type="checkbox" id="switch-1" class="sr-only" />
                                    <div class="relative aspect-[2/1] h-4 rounded-full border-2 border-transparent outline outline-1 after:absolute after:left-px after:inset-0 after:right-auto after:mx-px after:aspect-square after:rounded-full after:bg-[#8B96A0] after:transition after:content-[''] outline-gray-300" id="switch-input"></div>
                                    <label for="switch-1" class="text-sm">
                                        Toggle this switch element
                                    </label>
                                </button>
                            </div>
                            <div class="-mt-4 flex justify-start opacity-50">
                                <button type="button" class="relative flex items-center gap-2" >
                                    <input type="checkbox" id="switch-2" readonly disabled class="sr-only" />
                                    <div class="relative aspect-[2/1] h-4 rounded-full border-2 border-transparent outline outline-1 after:absolute after:left-px after:inset-0 after:right-auto after:mx-px after:aspect-square after:rounded-full after:bg-[#8B96A0] after:transition after:content-[''] outline-gray-300" id="switch-input"></div>
                                    <label for="switch-2" class="text-sm">
                                        Disabled switch element
                                    </label>
                                </button>
                            </div>
                        </form>
                        <form class="flex flex-col gap-6" autocomplete="off">
                            <header class="flex flex-col">
                                <h5 class="font-medium">Checkboxes and radios</h5>
                            </header>
                            <div class="flex items-center gap-2">
                                <input type="checkbox" name="checkbox" id="checkbox-1" class="border-none outline-none accent-[#6658DD] h-4 aspect-square">
                                <label for="checkbox-1" class="text-sm">Check this custom checkbox</label>
                            </div>
                            <div class="-mt-5 flex items-center gap-2">
                                <input type="checkbox" name="checkbox" id="checkbox-2" class="border-none outline-none accent-[#6658DD] h-4 aspect-square">
                                <label for="checkbox-2" class="text-sm">Check this custom checkbox</label>
                            </div>
                            <div class="flex items-center gap-2">
                                <input type="radio" name="radio" id="radio-1" class="border-none outline-none accent-[#6658DD] h-4 aspect-square">
                                <label for="radio-1" class="text-sm">Check this custom radio</label>
                            </div>
                            <div class="-mt-5 flex items-center gap-2">
                                <input type="radio" name="radio" id="radio-2" class="border-none outline-none accent-[#6658DD] h-4 aspect-square">
                                <label for="radio-2" class="text-sm">Check this custom radio</label>
                            </div>
                        </form>
                    </div>
                </section>
                {{-- End Section 2 --}}
                {{-- Section 3 --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <section class="bg-white p-6 rounded-lg mt-6">
                        <form class="flex flex-col gap-6" autocomplete="off">
                            <header class="flex flex-col">
                                <h5 class="font-medium">Input Sizes</h5>
                                <p class="text-sm text-slate-700/50">
                                    Set heights using classes like 
                                    <code class="text-xs text-[#f672a7]">.input-lg</code>,
                                    and set widths using grid column classes like 
                                    <code class="text-xs text-[#f672a7]">.col-lg-*</code>.
                                </p>
                            </header>
                            <div class="flex flex-col gap-2">
                                <label for="small-input" class="block text-xs font-medium">Small</label>
                                <input type="text" id="small-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-1.5 px-2.5 focus:outline-none focus:border-gray-500" placeholder=".input-sm">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="normal-input" class="block text-sm font-medium">Normal</label>
                                <input type="text" id="normal-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Normal">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="large-input" class="block text-sm font-medium">Large</label>
                                <input type="text" id="large-input" class="bg-white border border-gray-300 text-base rounded block w-full py-2.5 px-3.5 focus:outline-none focus:border-gray-500" placeholder=".input-lg">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="grid-input" class="block text-sm font-medium">Grid Sizes</label>
                                <input type="text" id="grid-input" class="bg-white border border-gray-300 text-sm rounded block w-1/4 py-2 px-3 focus:outline-none focus:border-gray-500" placeholder=".col-sm-4">
                            </div>
                        </form>
                    </section>
                    <section class="bg-white p-6 rounded-lg mt-4">
                        <form class="flex flex-col gap-6" autocomplete="off">
                            <header class="flex flex-col">
                                <h5 class="font-medium">Input Group</h5>
                                <p class="text-sm text-slate-700/50">
                                    Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs 
                                </p>
                            </header>
                            <div class="flex flex-col gap-2">
                                <label for="adons-input" class="block text-sm font-medium">Static</label>
                                <div class="flex ">
                                    <button type="button" class="bg-[#F7F7F7] rounded-l border border-gray-300 border-r-0 px-3 text-slate-700/70 focus:outline-none grid place-items-center">
                                        <i class="fa-light fa-at"></i>
                                    </button>
                                    <input type="text" id="adons-input" class="bg-white border border-gray-300 text-sm rounded-r block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Username">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="dropdown-input" class="block text-sm font-medium">Dropdowns</label>
                                <div class="flex ">
                                    <button type="button" class="bg-[#6658DD] rounded-l border border-gray-300 border-r-0 px-3 text-gray-50 focus:outline-none grid place-items-center text-sm">
                                        Dropdown
                                    </button>
                                    <input type="text" id="dropdown-input" class="bg-white border border-gray-300 text-sm rounded-r block w-full py-2 px-3 focus:outline-none focus:border-gray-500" >
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="button-input" class="block text-sm font-medium">Buttons</label>
                                <div class="flex ">
                                    <input type="text" id="button-input" class="bg-white border border-gray-300 text-sm rounded-l block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Recipient's username" >
                                    <button type="button" class="bg-[#2B313C] rounded-r border border-gray-300 border-l-0 px-3 text-gray-50 focus:outline-none grid place-items-center text-sm" >
                                        Button
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="file-group-input" class="block text-sm font-medium">Default file input</label>
                                <input type="file" id="file-group-input" class="relative bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 pl-24 focus:outline-none focus:border-gray-500 file:absolute file:inset-0 file:border-0 file:px-3 file:text-slate-700/70">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="file-multiple-input" class="block text-sm font-medium">Multiple file input</label>
                                <input type="file" id="file-multiple-input" class="relative bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 pl-24 focus:outline-none focus:border-gray-500 file:absolute file:inset-0 file:border-0 file:px-3 file:text-slate-700/70" multiple>
                            </div>
                        </form>
                    </section>
                </div>
                {{-- End Section 3 --}}
                {{-- Section 4 --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <section class="bg-white p-6 rounded-lg mt-6">
                        <form class="flex flex-col gap-6" autocomplete="off">
                            <header class="flex flex-col">
                                <h5 class="font-medium">Basic Example</h5>
                            </header>
                            <div class="flex flex-col gap-2">
                                <label for="basic-email-input" class="block text-sm font-medium">Email address</label>
                                <input type="email" id="basic-email-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Enter email">
                                <span class="text-xs text-gray-400">We'll never share your email with anyone else.</span>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="basic-password-input" class="block text-sm font-medium">Password</label>
                                <input type="password" id="basic-password-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Password">
                            </div>
                            <div class="flex items-center gap-2">
                                <input type="checkbox" name="checkbox" id="checkbox-basic" class="border-none outline-none accent-[#6658DD] h-4 aspect-square">
                                <label for="checkbox-basic" class="text-sm">Check me out !</label>
                            </div>
                            <div class="flex items-center gap-2">
                                <button type="submit" class="bg-[#6658DD] py-2.5 px-4 text-sm text-gray-50 rounded">Submit</button>
                            </div>
                        </form>
                    </section>
                    <section class="bg-white p-6 rounded-lg mt-6">
                        <form class="flex flex-col gap-6" autocomplete="off">
                            <header class="flex flex-col">
                                <h5 class="font-medium">Horizontal form</h5>
                            </header>
                            <div class="grid grid-cols-3">
                                <label for="horizontal-email-input" class="flex items-center text-sm font-medium">Email address</label>
                                <input type="email" id="horizontal-email-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 col-span-2 focus:outline-none focus:border-gray-500" placeholder="Email">
                            </div>
                            <div class="grid grid-cols-3">
                                <label for="horizontal-password-input" class="flex items-center text-sm font-medium">Password</label>
                                <input type="password" id="horizontal-password-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 col-span-2 focus:outline-none focus:border-gray-500" placeholder="Password">
                            </div>
                            <div class="grid grid-cols-3">
                                <label for="horizontal-repassword-input" class="flex items-center text-sm font-medium">Re Password</label>
                                <input type="password" id="horizontal-repassword-input" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 col-span-2 focus:outline-none focus:border-gray-500" placeholder="Retype Password">
                            </div>
                            <div class="grid grid-cols-3">
                                <span></span>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" name="checkbox" id="checkbox-horizontal" class="border-none outline-none accent-[#6658DD] h-4 aspect-square">
                                    <label for="checkbox-horizontal" class="text-sm">Check me out !</label>
                                </div>
                            </div>
                            <div class="grid grid-cols-3">
                                <span></span>
                                <div class="flex items-center gap-2">
                                    <button type="submit" class="bg-[#4fc6e1] py-2.5 px-4 text-sm text-gray-50 rounded">Submit</button>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
                {{-- End Section 4 --}}
                {{-- Section 5 --}}
                <section class="bg-white p-6 rounded-lg mt-6">
                    <form class="flex flex-col gap-4" autocomplete="off">
                        <header class="flex flex-col">
                            <h5 class="font-medium">Column sizing</h5>
                            <p class="text-sm text-slate-700/50">
                                As shown in the previous examples, our grid system allows you to place any number of 
                                <code class="text-xs text-[#f672a7]">.cols</code>
                                within a 
                                <code class="text-xs text-[#f672a7]">.row</code>.
                            </p>
                        </header>
                        <div class="grid grid-cols-2">
                            <div class="flex flex-row gap-6 items-center">
                                <div class="flex flex-col gap-2">
                                    <input type="text" class="bg-white text-sm block w-full py-2" readonly value="email@example.com">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <input type="password" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Password">
                                </div>
                                <div class="flex items-center gap-2">
                                    <button type="submit" class="bg-[#6658DD] py-2.5 px-4 text-sm text-gray-50 rounded">Confirm identity</button>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="flex flex-col gap-2 col-span-2">
                                <h5 class="font-medium text-sm">Auto-sizing</h5>
                                <div class="flex flex-row gap-6 items-center">
                                    <div class="flex flex-col gap-2">
                                        <input type="text" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Jane Doe">
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div class="flex ">
                                            <button type="button" class="bg-[#F7F7F7] rounded-l border border-gray-300 border-r-0 px-3 text-slate-700/70 focus:outline-none grid place-items-center">
                                                <i class="fa-light fa-at"></i>
                                            </button>
                                            <input type="text" class="bg-white border border-gray-300 text-sm rounded-r block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <input type="checkbox" name="checkbox" id="remember-me" class="border-none outline-none accent-[#6658DD] h-4 aspect-square">
                                        <label for="remember-me" class="text-sm">Remember me</label>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <button type="submit" class="bg-[#6658DD] py-2.5 px-4 text-sm text-gray-50 rounded">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
                {{-- End Section 5 --}}
                {{-- Section 6 --}}
                <section class="bg-white p-6 rounded-lg mt-6">
                    <form class="grid grid-cols-2 gap-6" autocomplete="off">
                        <header class="flex flex-col col-span-2">
                            <h5 class="font-medium">Gutters</h5>
                            <p class="text-sm text-slate-700/50">
                                More complex layouts can also be created with the grid system.
                            </p>
                        </header>
                        <div class="flex flex-col gap-2">
                            <label for="email-gutter" class="block text-sm font-medium">Email</label>
                            <input type="email" id="email-gutter" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Email">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="password-gutter" class="block text-sm font-medium">Password</label>
                            <input type="password" id="password-gutter" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Password">
                        </div>
                        <div class="flex flex-col gap-2 col-span-2">
                            <label for="address-gutter" class="block text-sm font-medium">Address</label>
                            <input type="text" id="address-gutter" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="123 Main St">
                        </div>
                        <div class="flex flex-col gap-2 col-span-2">
                            <label for="address2-gutter" class="block text-sm font-medium">Address 2</label>
                            <input type="text" id="address2-gutter" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="flex flex-col gap-2 ">
                            <label for="city-gutter" class="block text-sm font-medium">City</label>
                            <input type="text" id="city-gutter" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500">
                        </div>
                        <div class="grid grid-cols-3 gap-6">
                            <div class="flex flex-col gap-2 col-span-2">
                                <label for="state-gutter" class="block text-sm font-medium">State</label>
                                <select id="state-gutter" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                            <div class="flex flex-col gap-2 ">
                                <label for="zip-gutter" class="block text-sm font-medium">Zip</label>
                                <input type="text" id="zip-gutter" class="bg-white border border-gray-300 text-sm rounded block w-full py-2 px-3 focus:outline-none focus:border-gray-500">
                            </div>
                        </div>
                        <div class="flex items-center gap-2 col-span-2">
                            <input type="checkbox" name="checkbox" id="check-gutter" class="border-none outline-none accent-[#6658DD] h-4 aspect-square">
                            <label for="check-gutter" class="text-sm">Check this custom checkbox</label>
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="submit" class="bg-[#6658DD] py-2.5 px-4 text-sm text-gray-50 rounded">Sign in</button>
                        </div>
                    </form>
                </section>
                {{-- End Section 6 --}}
                {{-- Section 7 --}}
                <section class="bg-white p-6 rounded-lg mt-6">
                    <div class="grid grid-cols-3">
                        <form class="flex flex-col gap-4" autocomplete="off">
                            <header class="flex flex-col">
                                <h5 class="font-medium">Custom checkbox - Basic</h5>
                                <p class="text-sm text-slate-700/50">
                                    Supports bootstrap brand colors: 
                                    <code class="text-xs text-[#f672a7]">.form-check</code>,
                                    <code class="text-xs text-[#f672a7]">.form-check-*</code>
                                    etc. 
                                </p>
                            </header>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="check-primary" class="border-none outline-none accent-[#6658DD] h-4 aspect-square" checked>
                                <label for="check-primary" class="text-sm">Primary</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="check-success" class="border-none outline-none accent-[#1ABC9C] h-4 aspect-square text-white" >
                                <label for="check-success" class="text-sm">Success</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="check-danger" class="border-none outline-none accent-[#F1556C] h-4 aspect-square" checked>
                                <label for="check-danger" class="text-sm">Danger</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="check-warning" class="border-none outline-none accent-[#F7B84B] h-4 aspect-square">
                                <label for="check-warning" class="text-sm">Warning</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="check-pink" class="border-none outline-none accent-[#F672A7] h-4 aspect-square" checked>
                                <label for="check-pink" class="text-sm">Pink</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="check-blue" class="border-none outline-none accent-[#4A81D4] h-4 aspect-square" checked>
                                <label for="check-blue" class="text-sm">Blue</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="check-info" class="border-none outline-none accent-[#4FC6E1] h-4 aspect-square" checked>
                                <label for="check-info" class="text-sm">Info</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="check-dark" class="border-none outline-none accent-[#323A46] h-4 aspect-square" checked>
                                <label for="check-dark" class="text-sm">Dark</label>
                            </div>
                        </form>
                        <form class="flex flex-col gap-4" autocomplete="off">
                            <header class="flex flex-col">
                                <h5 class="font-medium">Custom checkbox - Basic</h5>
                                <p class="text-sm text-slate-700/50">
                                    <code class="text-xs text-[#f672a7]">.rounded-circle</code>
                                    for roundness. 
                                </p>
                            </header>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="rounded-primary" class="border-none outline-none accent-[#6658DD] h-4 aspect-square" checked>
                                <label for="rounded-primary" class="text-sm">Primary</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="rounded-success" class="border-none outline-none accent-[#1ABC9C] h-4 aspect-square"  checked>
                                <label for="rounded-success" class="text-sm">Success</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="rounded-danger" class="border-none outline-none accent-[#F1556C] h-4 aspect-square" checked>
                                <label for="rounded-danger" class="text-sm">Danger</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="rounded-warning" class="border-none outline-none accent-[#F7B84B] h-4 aspect-square" checked>
                                <label for="rounded-warning" class="text-sm">Warning</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="rounded-pink" class="border-none outline-none accent-[#F672A7] h-4 aspect-square" >
                                <label for="rounded-pink" class="text-sm">Pink</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="rounded-blue" class="border-none outline-none accent-[#4A81D4] h-4 aspect-square" checked>
                                <label for="rounded-blue" class="text-sm">Blue</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="rounded-info" class="border-none outline-none accent-[#4FC6E1] h-4 aspect-square" checked>
                                <label for="rounded-info" class="text-sm">Info</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2">
                                <input type="checkbox" name="checkbox" id="rounded-dark" class="border-none outline-none accent-[#323A46] h-4 aspect-square" >
                                <label for="rounded-dark" class="text-sm">Dark</label>
                            </div>
                        </form>
                        <form class="flex flex-col gap-4" autocomplete="off">
                            <header class="flex flex-col">
                                <h5 class="font-medium">Custom checkbox - Disabled</h5>
                                <p class="text-sm text-slate-700/50">
                                    Disabled state also supported. 
                                </p>
                            </header>
                            <div class="flex items-center gap-2 col-span-2 opacity-50"  >
                                <input type="checkbox" name="checkbox" id="disabled-primary" class="border-none outline-none accent-[#6658DD] h-4 aspect-square" disabled >
                                <label for="disabled-primary" class="text-sm">Can't check this</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2 opacity-50" >
                                <input type="checkbox" name="checkbox" id="disabled-primary" class="border-none outline-none accent-[#6658DD] h-4 aspect-square appearance-none bg-[#6658DD] rounded" checked disabled>
                                <label for="disabled-primary" class="text-sm">This too</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2 opacity-50">
                                <input type="checkbox" name="checkbox" id="disabled-warning" class="border-none outline-none accent-[#F7B84B] h-4 aspect-square appearance-none bg-[#F7B84B] rounded-full" checked disabled>
                                <label for="disabled-warning" class="text-sm">And this</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2 opacity-50">
                                <input type="checkbox" name="checkbox" id="disabled-success" class="border-none outline-none accent-[#1ABC9C] h-4 aspect-square appearance-none bg-[#1ABC9C] rounded" checked disabled>
                                <label for="disabled-success" class="text-sm">Can't check this</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2 opacity-50">
                                <input type="checkbox" name="checkbox" id="disabled-pink" class="border-none outline-none accent-[#F672A7] h-4 aspect-square appearance-none bg-[#F672A7] rounded" checked disabled>
                                <label for="disabled-pink" class="text-sm">This too</label>
                            </div>
                            <div class="flex items-center gap-2 col-span-2 opacity-50">
                                <input type="checkbox" name="checkbox" id="disabled-blue" class="border-none outline-none accent-[#4A81D4] h-4 aspect-square appearance-none bg-[#4A81D4] rounded-full" checked disabled>
                                <label for="disabled-blue" class="text-sm">And this</label>
                            </div>
                        </form>
                    </div>
                </section>
                {{-- End Section 7 --}}
                {{-- Section 8 --}}
                <section class="bg-white p-6 rounded-lg mt-6">
                    <div class="grid grid-cols-3">
                        <div class="flex flex-col gap-4" autocomplete="off">
                            <header class="flex flex-col">
                                <h5 class="font-medium">Custom radio - Basic</h5>
                                <p class="text-sm text-slate-700/50">
                                    Supports bootstrap brand colors: 
                                    <code class="text-xs text-[#f672a7]">.form-check</code>,
                                    <code class="text-xs text-[#f672a7]">.form-check-*</code>
                                    etc. 
                                </p>
                            </header>
                            <div class="grid grid-cols-2">
                                <form class="flex flex-col gap-4">
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" name="radio-custom" id="radio-primary" class="border-none outline-none accent-[#6658DD] h-4 aspect-square" checked>
                                        <label for="radio-primary" class="text-sm">Default</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" name="radio-custom" id="radio-success" class="border-none outline-none accent-[#1ABC9C] h-4 aspect-square text-white" >
                                        <label for="radio-success" class="text-sm">Success</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" name="radio-custom" id="radio-danger" class="border-none outline-none accent-[#F1556C] h-4 aspect-square">
                                        <label for="radio-danger" class="text-sm">Danger</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" name="radio-custom" id="radio-warning" class="border-none outline-none accent-[#F7B84B] h-4 aspect-square">
                                        <label for="radio-warning" class="text-sm">Warning</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" name="radio-custom" id="radio-pink" class="border-none outline-none accent-[#F672A7] h-4 aspect-square">
                                        <label for="radio-pink" class="text-sm">Pink</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" name="radio-custom" id="radio-blue" class="border-none outline-none accent-[#4A81D4] h-4 aspect-square">
                                        <label for="radio-blue" class="text-sm">Blue</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" name="radio-custom" id="radio-info" class="border-none outline-none accent-[#4FC6E1] h-4 aspect-square">
                                        <label for="radio-info" class="text-sm">Info</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" name="radio-custom" id="radio-dark" class="border-none outline-none accent-[#323A46] h-4 aspect-square">
                                        <label for="radio-dark" class="text-sm">Dark</label>
                                    </div>
                                </form>
                                <form class="flex flex-col gap-4">
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" id="radio2-primary" class="border-none outline-none accent-[#6658DD] h-4 aspect-square" checked>
                                        <label for="radio2-primary" class="text-sm">Default</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" id="radio2-success" class="border-none outline-none accent-[#1ABC9C] h-4 aspect-square text-white" checked>
                                        <label for="radio2-success" class="text-sm">Success</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" id="radio2-danger" class="border-none outline-none accent-[#F1556C] h-4 aspect-square" checked>
                                        <label for="radio2-danger" class="text-sm">Danger</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" id="radio2-warning" class="border-none outline-none accent-[#F7B84B] h-4 aspect-square" checked>
                                        <label for="radio2-warning" class="text-sm">Warning</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" id="radio2-pink" class="border-none outline-none accent-[#F672A7] h-4 aspect-square" checked>
                                        <label for="radio2-pink" class="text-sm">Pink</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" id="radio2-blue" class="border-none outline-none accent-[#4A81D4] h-4 aspect-square" checked>
                                        <label for="radio2-blue" class="text-sm">Blue</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" id="radio2-info" class="border-none outline-none accent-[#4FC6E1] h-4 aspect-square" checked>
                                        <label for="radio2-info" class="text-sm">Info</label>
                                    </div>
                                    <div class="flex items-center gap-2 col-span-2">
                                        <input type="radio" id="radio2-dark" class="border-none outline-none accent-[#323A46] h-4 aspect-square" checked>
                                        <label for="radio2-dark" class="text-sm">Dark</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <form class="flex flex-col gap-4" autocomplete="off">
                            <header class="flex flex-col">
                                <h5 class="font-medium">Custom radio - Disabled</h5>
                                <p class="text-sm text-slate-700/50">
                                    Disabled state also supported. 
                                </p>
                            </header>
                            <div class="flex items-center gap-2 col-span-2 opacity-50">
                                <input type="radio" id="disabled-danger" class="border-none outline-none accent-[#F1556C] h-4 aspect-square" checked>
                                <span for="disabled-danger" class="text-sm">Zero</span>
                            </div>
                            <div class="flex items-center gap-2 col-span-2 opacity-50">
                                <input type="radio" id="disabled-dark" class="border-none outline-none accent-[#323A46] h-4 aspect-square" checked>
                                <span for="disabled-dark" class="text-sm">One</span>
                            </div>
                            <div class="flex items-center gap-2 col-span-2 opacity-50">
                                <input type="radio" id="disabled-blue" class="border-none outline-none accent-[#4A81D4] h-4 aspect-square" checked>
                                <span for="disabled-blue" class="text-sm">Two</span>
                            </div>
                            <div class="flex items-center gap-2 col-span-2 opacity-50">
                                <input type="radio" id="disabled-pink" class="border-none outline-none accent-[#F672A7] h-4 aspect-square" checked>
                                <span for="disabled-pink" class="text-sm">Three</span>
                            </div>
                        </form>
                    </div>
                </section>
                {{-- End Section 8 --}}
            </div>
        </main>
        <script type="module" defer>
            const showInput = document.querySelector("#show-input");
            showInput.nextElementSibling.addEventListener("click", function() {
                if (this.children[0].classList.contains('fa-eye')) {
                    this.children[0].classList.remove('fa-eye');
                    this.children[0].classList.add('fa-eye-slash');
                    this.previousElementSibling.setAttribute('type', 'text');
                } else{
                    this.children[0].classList.remove('fa-eye-slash');
                    this.children[0].classList.add('fa-eye');
                    this.previousElementSibling.setAttribute('type', 'password');
                }
            });
        </script>
    </body>
</html>
