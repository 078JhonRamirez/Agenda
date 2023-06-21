@extends('layouts.layout')

@section('sesion')

        <header class="s-header">

            <div class="header__top">
                <div class="header__logo">
                    <a class="site-logo" href="index.html">
                        <img src="images/logo.svg" alt="Homepage">
                    </a>
                </div>
            </div> <!-- end header__top -->


            <!-- menu toggle -->
            <a href="#0" class="header__menu-toggle">
                <span>Menu</span>
            </a>

        </header> <!-- end s-header -->


        <!-- search
        ================================================== -->
        <div class="s-search">

            <div class="search-block">
    
                <form role="search" method="get" class="search-form" action="#">
                    <label>
                        <span class="hide-content">Search for:</span>
                        <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                    </label>
                    <input type="submit" class="search-submit" value="Search">
                </form>
    
                <a href="#0" title="Close Search" class="search-close">Close</a>
    
            </div>  <!-- end search-block -->

            <!-- search modal trigger -->
            <a href="#0" class="search-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z"></path></svg>
                <span>Search</span>
            </a>
            <span class="search-line"></span>

        </div> <!-- end s-search -->


        <!-- site content
        ================================================== -->
        <div class="s-content">
            
            <div class="masonry-wrap">

                <div class="masonry">
                    {{-- <div class="card-group"> --}}



                        {{-- Calendario --}}
                        <div class="content">
                            <div id='calendar'></div>
                          </div>
                        
                            <script>
                              document.addEventListener('DOMContentLoaded', function() {
                            var calendarEl = document.getElementById('calendar');
                        
                            var calendar = new FullCalendar.Calendar(calendarEl, {
                              plugins: [ 'interaction', 'dayGrid' ],
                              defaultDate: '2023-01-01',
                              editable: true,
                              eventLimit: true, // allow "more" link when too many events
                              events: [
                                {
                                  title: 'All Day Event',
                                  start: '2020-02-01'
                                },
                                {
                                  title: 'Long Event',
                                  start: '2020-02-07',
                                  end: '2020-02-10'
                                },
                                {
                                  groupId: 999,
                                  title: 'Repeating Event',
                                  start: '2020-02-09T16:00:00'
                                },
                                {
                                  groupId: 999,
                                  title: 'Repeating Event',
                                  start: '2020-02-16T16:00:00'
                                },
                                {
                                  title: 'Conference',
                                  start: '2020-05-11',
                                  end: '2020-05-13'
                                },
                                {
                                  title: 'Meeting',
                                  start: '2020-02-12T10:30:00',
                                  end: '2020-02-12T12:30:00'
                                },
                                {
                                  title: 'Lunch',
                                  start: '2020-02-12T12:00:00'
                                },
                                {
                                  title: 'Meeting',
                                  start: '2020-02-12T14:30:00'
                                },
                                {
                                  title: 'Happy Hour',
                                  start: '2020-02-12T17:30:00'
                                },
                                {
                                  title: 'Dinner',
                                  start: '2020-02-12T20:00:00'
                                },
                                {
                                  title: 'Birthday Party',
                                  start: '2020-02-13T07:00:00'
                                },
                                {
                                  title: 'Click for Google',
                                  url: 'http://google.com/',
                                  start: '2020-02-28'
                                }
                              ]
                            });
                        
                            calendar.render();
                          });
                        
                            </script>
                            <script src="asset/js/main.js"></script>


                        {{-- Historial --}}
                        <table class="table caption-top">
                            <caption>List of users</caption>
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>



                        </div>
                    </div>
                       </div> <!-- end s-wrap -->
                   
                   
                       <!-- Java Script
                       ================================================== -->
                       <script src="js/jquery-3.2.1.min.js"></script>
                       <script src="js/plugins.js"></script>
                       <script src="js/main.js"></script>
                   
                   @endsection

