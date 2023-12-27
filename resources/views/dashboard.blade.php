

<!DOCTYPE html>
<html>
  @extends('layout.head')
  
  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    
    {{-- Navbar --}}
    @extends('layout.sidebar')
    
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="text-sm leading-normal">
                <a class="opacity-50 text-slate-700" href="javascript:;">Halaman</a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="mb-0 font-bold capitalize">Hai, {{Auth::user()->nama}}</h6>
          </nav>
  
          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
              <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
              </div>
            </div>
          </div>
        </div>
      </nav>
  
      <!-- end Navbar -->
  
      <!-- cards -->
      <div class="w-full px-6 py-6 mx-auto">
  
        {{-- Table --}}
        <div class="flex flex-wrap my-6 -mx-3">
          
          <!-- card 1 -->
  
          <div class="w-full max-w-full px-3 mt-0 mb-6">
            <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
              <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                <div class="flex flex-wrap mt-0 -mx-3">
                  <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                    <h6>Daftar Periksa</h6>
                  </div>
                </div>
              </div>
              <div class="flex-auto p-6 px-0 pb-2">
                <div class="overflow-x-auto">
                  <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Companies</th>
                        <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Members</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Budget</th>
                        <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Completion</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="./assets/img/small-logos/logo-xd.svg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="xd" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">Soft UI XD Version</h6>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="mt-2 avatar-group">
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="team1" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Ryan Tompson
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-2.jpg" class="w-full rounded-full" alt="team2" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Romina Hadid
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-3.jpg" class="w-full rounded-full" alt="team3" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Alexander Smith
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="team4" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Jessica Doe
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                          <span class="text-xs font-semibold leading-tight"> $14,000 </span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="w-3/4 mx-auto">
                            <div>
                              <div>
                                <span class="text-xs font-semibold leading-tight">60%</span>
                              </div>
                            </div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="./assets/img/small-logos/logo-atlassian.svg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="atlassian" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">Add Progress Track</h6>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="mt-2 avatar-group">
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-2.jpg" class="w-full rounded-full" alt="team5" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Romina Hadid
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="team6" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Jessica Doe
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                          <span class="text-xs font-semibold leading-tight"> $3,000 </span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="w-3/4 mx-auto">
                            <div>
                              <div>
                                <span class="text-xs font-semibold leading-tight">10%</span>
                              </div>
                            </div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 w-1/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="./assets/img/small-logos/logo-slack.svg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="team7" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">Fix Platform Errors</h6>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="mt-2 avatar-group">
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-3.jpg" class="w-full rounded-full" alt="team8" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Romina Hadid
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="team9" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Jessica Doe
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                          <span class="text-xs font-semibold leading-tight"> Not set </span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="w-3/4 mx-auto">
                            <div>
                              <div>
                                <span class="text-xs font-semibold leading-tight">100%</span>
                              </div>
                            </div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="./assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="spotify" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">Launch our Mobile App</h6>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="mt-2 avatar-group">
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="user1" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Ryan Tompson
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-3.jpg" class="w-full rounded-full" alt="user2" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Romina Hadid
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="user3" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Alexander Smith
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="user4" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Jessica Doe
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                          <span class="text-xs font-semibold leading-tight"> $20,500 </span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="w-3/4 mx-auto">
                            <div>
                              <div>
                                <span class="text-xs font-semibold leading-tight">100%</span>
                              </div>
                            </div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="./assets/img/small-logos/logo-jira.svg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="jira" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">Add the New Pricing Page</h6>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="mt-2 avatar-group">
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="user5" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Ryan Tompson
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                          <span class="text-xs font-semibold leading-tight"> $500 </span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                          <div class="w-3/4 mx-auto">
                            <div>
                              <div>
                                <span class="text-xs font-semibold leading-tight">25%</span>
                              </div>
                            </div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-1/4 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="./assets/img/small-logos/logo-invision.svg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="invision" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">Redesign New Online Shop</h6>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                          <div class="mt-2 avatar-group">
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-1.jpg" class="w-full rounded-full" alt="user6" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Ryan Tompson
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                            <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                              <img src="./assets/img/team-4.jpg" class="w-full rounded-full" alt="user7" />
                            </a>
                            <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                              Jessica Doe
                              <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-0 whitespace-nowrap">
                          <span class="text-xs font-semibold leading-tight"> $2,000 </span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                          <div class="w-3/4 mx-auto">
                            <div>
                              <div>
                                <span class="text-xs font-semibold leading-tight">40%</span>
                              </div>
                            </div>
                            <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                              <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-2/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <footer class="pt-4">
          <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
              <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                  ©
                  <script>
                    document.write(new Date().getFullYear() + ",");
                  </script>
                  dibuat oleh
                  <a href="" class="font-semibold text-slate-700" target="_blank">Naufal Iksham</a>
                  untuk website yang lebih baik.
                </div>
              </div>
              <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                  <li class="nav-item">
                    <a href="mailto:naufal.iksham@gmail.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Email</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.instagram.com/naufal_iksham/" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Instagram</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.facebook.com/naufaliksham/" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Facebook</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://api.whatsapp.com/send/?phone=6282243090750&text&type=phone_number&app_absent=0" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">WhatsApp</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <!-- end cards -->
    </main>
  </body>
  <!-- plugin for charts  -->
  <script src="./assets/js/plugins/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
</html>