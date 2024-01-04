<nav id="myNav">
    <div class="menu-items">
        <ul class="nav-links">
            <li>
                <a href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17 21H7C4.79086 21 3 19.2091 3 17V10.7076C3 9.30887 3.73061 8.01175 4.92679 7.28679L9.92679 4.25649C11.2011 3.48421 12.7989 3.48421 14.0732 4.25649L19.0732 7.28679C20.2694 8.01175 21 9.30887 21 10.7076V17C21 19.2091 19.2091 21 17 21Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9 17H15" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="link-name">Dashboard</span>
                </a>
            </li>

            <li class="{{routeActive('chat.index')}}">
                <a href="{{ route('chat.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10L12 10L16 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 14L10 14L12 14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.8214 2.48697 15.5291 3.33782 17L2.5 21.5L7 20.6622C8.47087 21.513 10.1786 22 12 22Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>


                    <span class="link-name">Chat</span>
                </a>
            </li>

            <li class="{{routeActive('customer.index')}}">
                <a href="{{ route('customer.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 18V17C7 14.2386 9.23858 12 12 12V12C14.7614 12 17 14.2386 17 17V18"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1 18V17C1 15.3431 2.34315 14 4 14V14" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M23 18V17C23 15.3431 21.6569 14 20 14V14" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M4 14C5.10457 14 6 13.1046 6 12C6 10.8954 5.10457 10 4 10C2.89543 10 2 10.8954 2 12C2 13.1046 2.89543 14 4 14Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M20 14C21.1046 14 22 13.1046 22 12C22 10.8954 21.1046 10 20 10C18.8954 10 18 10.8954 18 12C18 13.1046 18.8954 14 20 14Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>



                    <span class="link-name">Customer</span>
                </a>
            </li>

            <li
                class="{{routeActive(['setting.index', 'setting.company', 'setting.tag', 'setting.subscription', 'setting.integration','setting.subscription', 'setting.checkout', 'setting.invoice'])}}">
                <a href="{{ route('setting.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19.6224 10.3954L18.5247 7.7448L20 6L18 4L16.2647 5.48295L13.5578 4.36974L12.9353 2H10.981L10.3491 4.40113L7.70441 5.51596L6 4L4 6L5.45337 7.78885L4.3725 10.4463L2 11V13L4.40111 13.6555L5.51575 16.2997L4 18L6 20L7.79116 18.5403L10.397 19.6123L11 22H13L13.6045 19.6132L16.2551 18.5155C16.6969 18.8313 18 20 18 20L20 18L18.5159 16.2494L19.6139 13.598L21.9999 12.9772L22 11L19.6224 10.3954Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="link-name">Setting</span>
                </a>
            </li>

            <li class="{{routeActive('broadcast.index')}}">
                <a href="{{ route('broadcast.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14 14V6M14 14L20.1023 17.487C20.5023 17.7156 21 17.4268 21 16.9661V3.03391C21 2.57321 20.5023 2.28439 20.1023 2.51296L14 6M14 14H7C4.79086 14 3 12.2091 3 10V10C3 7.79086 4.79086 6 7 6H14"
                            stroke-width="1.5" />
                        <path
                            d="M7.75716 19.3001L7 14H11L11.6772 18.7401C11.8476 19.9329 10.922 21 9.71716 21C8.73186 21 7.8965 20.2755 7.75716 19.3001Z"
                            stroke-width="1.5" />
                    </svg>

                    <span class="link-name">Broadcast</span>
                </a>
            </li>

            <li class="{{routeActive(['autofollup.index', 'autofollup.transaction', 'autofollup.aftersale'])}}">
                <a href="{{ route('autofollup.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 11C20 6.58172 16.4183 3 12 3C7.58172 3 4 6.58172 4 11" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M2 15.4384V13.5616C2 12.6438 2.62459 11.8439 3.51493 11.6213L5.25448 11.1864C5.63317 11.0917 6 11.3781 6 11.7685V17.2315C6 17.6219 5.63317 17.9083 5.25448 17.8136L3.51493 17.3787C2.62459 17.1561 2 16.3562 2 15.4384Z"
                            stroke-width="1.5" />
                        <path
                            d="M22 15.4384V13.5616C22 12.6438 21.3754 11.8439 20.4851 11.6213L18.7455 11.1864C18.3668 11.0917 18 11.3781 18 11.7685V17.2315C18 17.6219 18.3668 17.9083 18.7455 17.8136L20.4851 17.3787C21.3754 17.1561 22 16.3562 22 15.4384Z"
                            stroke-width="1.5" />
                        <path d="M20 18V18.5C20 19.6046 19.1046 20.5 18 20.5H14.5" stroke-width="1.5" />
                        <path
                            d="M13.5 22H10.5C9.67157 22 9 21.3284 9 20.5C9 19.6716 9.67157 19 10.5 19H13.5C14.3284 19 15 19.6716 15 20.5C15 21.3284 14.3284 22 13.5 22Z"
                            stroke-width="1.5" />
                    </svg>


                    <span class="link-name">Auto follow-up</span>
                </a>
            </li>

            <li class="{{routeActive('logchat.index')}}">
                <a href="{{ route('logchat.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 19V5C4 3.89543 4.89543 3 6 3H19.4C19.7314 3 20 3.26863 20 3.6V16.7143"
                            stroke-width="1.5" stroke-linecap="round" />
                        <path d="M10 14C10 14 10.9 10.8824 13 9" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M12.8022 12.4246L12.6677 12.4372C10.9758 12.5962 9.469 11.3542 9.30214 9.66304C9.13527 7.97193 10.3715 6.47214 12.0634 6.31317L15.049 6.03263C15.2406 6.01463 15.4111 6.15524 15.43 6.34669L15.6847 8.92762C15.8589 10.693 14.5683 12.2586 12.8022 12.4246Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6 17L20 17" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M6 21L20 21" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M6 21C4.89543 21 4 20.1046 4 19C4 17.8954 4.89543 17 6 17" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>



                    <span class="link-name">Log chat</span>
                </a>
            </li>

            <li class="{{routeActive('member.index')}}">
                <a href="{{ route('member.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 12C14.2091 12 16 10.2091 16 8C16 5.79086 14.2091 4 12 4C9.79086 4 8 5.79086 8 8C8 10.2091 9.79086 12 12 12Z"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 20V19C5 15.134 8.13401 12 12 12C13.0736 12 14.0907 12.2417 15 12.6736"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21 22L22 16L18.5 17.8L17 16L15.5 17.8L12 16L13 22H21Z" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>


                    <span class="link-name">Members</span>
                </a>
            </li>

            <li class="{{routeActive('messagetemplating.index')}}">
                <a href="{{ route('messagetemplating.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 12L17 12" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7 8L13 8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M3 20.2895V5C3 3.89543 3.89543 3 5 3H19C20.1046 3 21 3.89543 21 5V15C21 16.1046 20.1046 17 19 17H7.96125C7.35368 17 6.77906 17.2762 6.39951 17.7506L4.06852 20.6643C3.71421 21.1072 3 20.8567 3 20.2895Z"
                            stroke-width="1.5" />
                    </svg>



                    <span class="link-name">Message Templating</span>
                </a>
            </li>

            <li class="{{routeActive(['transaction.index', 'transaction.detail'])}}">
                <a href="{{ route('transaction.index') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 20H5C3.89543 20 3 19.1046 3 18V9C3 7.89543 3.89543 7 5 7H19C20.1046 7 21 7.89543 21 9V18C21 19.1046 20.1046 20 19 20Z"
                            stroke-width="1.5" />
                        <path d="M7 7V3.6C7 3.26863 7.26863 3 7.6 3H16.4C16.7314 3 17 3.26863 17 3.6V7"
                            stroke-width="1.5" />
                        <path d="M10 3V7" stroke-width="1.5" />
                        <path d="M12 3V7" stroke-width="1.5" />
                        <path
                            d="M16.5 14C16.2239 14 16 13.7761 16 13.5C16 13.2239 16.2239 13 16.5 13C16.7761 13 17 13.2239 17 13.5C17 13.7761 16.7761 14 16.5 14Z"
                            fill="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span class="link-name">Transaction</span>
                </a>
            </li>
        </ul>
    </div>
</nav>