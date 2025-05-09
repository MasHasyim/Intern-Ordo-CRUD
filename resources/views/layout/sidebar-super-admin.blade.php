<!-- Sidebar Blade Template -->
<div class="bg">
    <!-- Closed Sidebar Container -->
    <div class="container-close-sidebar">
        <img class="user-default" src="{{ asset('images/photo/user_default.png') }}" alt="logo" />
        <div class="icon-sidebar">
            <!-- Dashboard Link -->
            <a class="outer-icon" id="dashboard" href="{{ route('super-admin.dashboard.index') }}">
                <img class="icon-close-dashboard" src="{{ asset('images/icon/dashboard.svg') }}" alt="logo" />
            </a>

            <!-- Master Menu (Visible Only to Super Admin) -->
            <div class="outer-icon2" id="master-close2">
                <div class="icon-close-dashboard2" id="master-close">
                    <img class="icon-close-dashboard" src="{{ asset('images/icon/master.svg') }}" alt="logo" />
                    <img class="arrow" src="{{ asset('images/icon/arrow.svg') }}" alt="logo" />
                </div>
            </div>

            <!-- Other Links -->
            <a class="outer-icon" id="report" href="{{ route('super-admin.report-kerusakan.index') }}">
                <svg class="icon-close-dashboard" xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                    viewBox="0 0 20 21" fill="none">
                    <path
                        d="M4.97504 1.33594H2.52504C1.46671 1.33594 0.833374 1.96927 0.833374 3.0276V5.4776C0.833374 6.53594 1.46671 7.16927 2.52504 7.16927H4.97504C6.03337 7.16927 6.66671 6.53594 6.66671 5.4776V3.0276C6.66671 1.96927 6.03337 1.33594 4.97504 1.33594ZM5.39171 5.13594C5.60004 5.34427 5.60004 5.68594 5.39171 5.89427C5.28337 5.99427 5.14171 6.04427 5.00837 6.04427C4.87504 6.04427 4.74171 5.99427 4.63337 5.89427L3.74171 5.01094L2.87504 5.89427C2.76671 5.99427 2.63337 6.04427 2.48337 6.04427C2.35004 6.04427 2.21671 5.99427 2.10837 5.89427C1.90004 5.68594 1.90004 5.34427 2.10837 5.13594L3.00004 4.2526L2.11671 3.3776C1.90837 3.16927 1.90837 2.8276 2.11671 2.61927C2.32504 2.41094 2.66671 2.41094 2.87504 2.61927L3.74171 3.5026L4.62504 2.61927C4.83337 2.41094 5.17504 2.41094 5.38337 2.61927C5.59171 2.8276 5.59171 3.16927 5.38337 3.3776L4.50837 4.2526L5.39171 5.13594Z"
                        fill="white" />
                    <path
                        d="M17.9166 13.6818C17.9166 13.8068 17.8749 13.9318 17.7666 14.0401C16.5582 15.2568 14.4082 17.4234 13.1749 18.6651C13.0666 18.7818 12.9249 18.8318 12.7832 18.8318C12.5082 18.8318 12.2416 18.6151 12.2416 18.2984V15.3818C12.2416 14.1651 13.2749 13.1568 14.5416 13.1568C15.3332 13.1484 16.4332 13.1484 17.3749 13.1484C17.6999 13.1484 17.9166 13.4068 17.9166 13.6818Z"
                        fill="white" />
                    <path
                        d="M17.9166 13.6818C17.9166 13.8068 17.8749 13.9318 17.7666 14.0401C16.5582 15.2568 14.4082 17.4234 13.1749 18.6651C13.0666 18.7818 12.9249 18.8318 12.7832 18.8318C12.5082 18.8318 12.2416 18.6151 12.2416 18.2984V15.3818C12.2416 14.1651 13.2749 13.1568 14.5416 13.1568C15.3332 13.1484 16.4332 13.1484 17.3749 13.1484C17.6999 13.1484 17.9166 13.4068 17.9166 13.6818Z"
                        fill="white" />
                    <path
                        d="M13.8584 2.16406H8.75004C8.29171 2.16406 7.91671 2.53906 7.91671 2.9974V5.91406C7.91671 7.2974 6.80004 8.41406 5.41671 8.41406H2.91671C2.45837 8.41406 2.08337 8.78906 2.08337 9.2474V14.7724C2.08337 17.0141 3.90004 18.8307 6.14171 18.8307H10.1584C10.6167 18.8307 10.9917 18.4557 10.9917 17.9974V15.3807C10.9917 13.4641 12.5834 11.9057 14.5417 11.9057C14.9834 11.8974 16.0584 11.8974 17.0834 11.8974C17.5417 11.8974 17.9167 11.5307 17.9167 11.0641V6.2224C17.9167 3.98073 16.1 2.16406 13.8584 2.16406ZM7.26671 14.6724H5.06671C4.72504 14.6724 4.44171 14.3891 4.44171 14.0474C4.44171 13.6974 4.72504 13.4141 5.06671 13.4141H7.26671C7.62504 13.4141 7.89171 13.6974 7.89171 14.0474C7.89171 14.3891 7.62504 14.6724 7.26671 14.6724ZM9.59171 11.5807H5.06671C4.72504 11.5807 4.44171 11.2974 4.44171 10.9557C4.44171 10.6057 4.72504 10.3224 5.06671 10.3224H9.59171C9.93337 10.3224 10.225 10.6057 10.225 10.9557C10.225 11.2974 9.93337 11.5807 9.59171 11.5807Z"
                        fill="white" />
                </svg>
            </a>
            <a class="outer-icon" id="setting" href="{{ route('super-admin.setting.index') }}">
                <img class="icon-close-dashboard" src="{{ asset('images/icon/setting.svg') }}" alt="logo" />
            </a>
        </div>

        <!-- Logout Link -->
        <a class="logout" href="{{ route('login') }}">
            <img class="icon-logout" src="{{ asset('images/icon/logout.svg') }}" alt="logo" />
        </a>
    </div>

    <!-- Open Sidebar Container -->
    <div class="container-open-sidebar">
        <img class="user-default2" src="{{ asset('images/photo/user_default.png') }}" alt="logo" />
        <div class="user">
            <p class="name" style="margin: 0;">Superadmin</p>
            <p class="role" style="margin: 0; margin-top: 5px;">Superadmin</p>
        </div>
        <div class="icon-sidebar">
            <!-- Dashboard Link with Label -->
            <a class="outer-icon" id="dashboard" href="{{ route('super-admin.dashboard.index') }}">
                <div class="group-icon">
                    <img class="icon-close-dashboard" src="{{ asset('images/icon/dashboard.svg') }}" alt="logo" />
                    <p>Dashboard</p>
                </div>
            </a>

            <!-- Master Menu with Submenus (Visible Only to Super Admin) -->
            <div class="menu-master">
                <div class="outer-icon2">
                    <div class="icon-close-dashboard2">
                        <div class="group-icon">
                            <img class="icon-close-dashboard" src="{{ asset('images/icon/master.svg') }}"
                                alt="logo" />
                            <p>Master</p>
                            <img class="arrow2" src="{{ asset('images/icon/arrow.svg') }}" alt="logo" />
                        </div>
                    </div>
                </div>
                <div class="sub-menu-master">
                    <a class="outer-icon" id="master-user" href="{{ route('super-admin.master.user.index') }}">
                        <div class="icon-close-dashboard2">
                            <div class="group-icon2">
                                <p>Master User</p>
                            </div>
                        </div>
                    </a>

                    <a class="outer-icon" id="master-role" href="{{ route('super-admin.master.role.index') }}">
                        <div class="icon-close-dashboard2">
                            <div class="group-icon2">
                                <p>Master Role</p>
                            </div>
                        </div>
                    </a>

                    <a class="outer-icon" id="master-truck" href="{{ route('super-admin.master.truck.index') }}">
                        <div class="icon-close-dashboard2">
                            <div class="group-icon2">
                                <p>Master Truck</p>
                            </div>
                        </div>
                    </a>

                    <a class="outer-icon" id="master-pabrik" href="{{ route('super-admin.master.pabrik.index') }}">
                        <div class="icon-close-dashboard2">
                            <div class="group-icon2">
                                <p>Master Pabrik</p>
                            </div>
                        </div>
                    </a>

                    <a class="outer-icon" id="master-kategori" href="{{ route('super-admin.master.kategori.category.index') }}">
                        <div class="icon-close-dashboard2">
                            <div class="group-icon2">
                                <p>Master Kategori</p>
                            </div>
                        </div>
                    </a>

                    <a class="outer-icon" id="master-sub-kategori"
                        href="{{ route('super-admin.master.sub-kategori.index') }}">
                        <div class="icon-close-dashboard2">
                            <div class="group-icon2">
                                <p>Master Sub Kategori</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <a class="outer-icon" id="report" href="{{ route('super-admin.report-kerusakan.index') }}">
                <div class="group-icon">
                    <svg class="icon-close-dashboard" xmlns="http://www.w3.org/2000/svg" width="20"
                        height="21" viewBox="0 0 20 21" fill="none">
                        <path
                            d="M4.97504 1.33594H2.52504C1.46671 1.33594 0.833374 1.96927 0.833374 3.0276V5.4776C0.833374 6.53594 1.46671 7.16927 2.52504 7.16927H4.97504C6.03337 7.16927 6.66671 6.53594 6.66671 5.4776V3.0276C6.66671 1.96927 6.03337 1.33594 4.97504 1.33594ZM5.39171 5.13594C5.60004 5.34427 5.60004 5.68594 5.39171 5.89427C5.28337 5.99427 5.14171 6.04427 5.00837 6.04427C4.87504 6.04427 4.74171 5.99427 4.63337 5.89427L3.74171 5.01094L2.87504 5.89427C2.76671 5.99427 2.63337 6.04427 2.48337 6.04427C2.35004 6.04427 2.21671 5.99427 2.10837 5.89427C1.90004 5.68594 1.90004 5.34427 2.10837 5.13594L3.00004 4.2526L2.11671 3.3776C1.90837 3.16927 1.90837 2.8276 2.11671 2.61927C2.32504 2.41094 2.66671 2.41094 2.87504 2.61927L3.74171 3.5026L4.62504 2.61927C4.83337 2.41094 5.17504 2.41094 5.38337 2.61927C5.59171 2.8276 5.59171 3.16927 5.38337 3.3776L4.50837 4.2526L5.39171 5.13594Z"
                            fill="white" />
                        <path
                            d="M17.9166 13.6818C17.9166 13.8068 17.8749 13.9318 17.7666 14.0401C16.5582 15.2568 14.4082 17.4234 13.1749 18.6651C13.0666 18.7818 12.9249 18.8318 12.7832 18.8318C12.5082 18.8318 12.2416 18.6151 12.2416 18.2984V15.3818C12.2416 14.1651 13.2749 13.1568 14.5416 13.1568C15.3332 13.1484 16.4332 13.1484 17.3749 13.1484C17.6999 13.1484 17.9166 13.4068 17.9166 13.6818Z"
                            fill="white" />
                        <path
                            d="M17.9166 13.6818C17.9166 13.8068 17.8749 13.9318 17.7666 14.0401C16.5582 15.2568 14.4082 17.4234 13.1749 18.6651C13.0666 18.7818 12.9249 18.8318 12.7832 18.8318C12.5082 18.8318 12.2416 18.6151 12.2416 18.2984V15.3818C12.2416 14.1651 13.2749 13.1568 14.5416 13.1568C15.3332 13.1484 16.4332 13.1484 17.3749 13.1484C17.6999 13.1484 17.9166 13.4068 17.9166 13.6818Z"
                            fill="white" />
                        <path
                            d="M13.8584 2.16406H8.75004C8.29171 2.16406 7.91671 2.53906 7.91671 2.9974V5.91406C7.91671 7.2974 6.80004 8.41406 5.41671 8.41406H2.91671C2.45837 8.41406 2.08337 8.78906 2.08337 9.2474V14.7724C2.08337 17.0141 3.90004 18.8307 6.14171 18.8307H10.1584C10.6167 18.8307 10.9917 18.4557 10.9917 17.9974V15.3807C10.9917 13.4641 12.5834 11.9057 14.5417 11.9057C14.9834 11.8974 16.0584 11.8974 17.0834 11.8974C17.5417 11.8974 17.9167 11.5307 17.9167 11.0641V6.2224C17.9167 3.98073 16.1 2.16406 13.8584 2.16406ZM7.26671 14.6724H5.06671C4.72504 14.6724 4.44171 14.3891 4.44171 14.0474C4.44171 13.6974 4.72504 13.4141 5.06671 13.4141H7.26671C7.62504 13.4141 7.89171 13.6974 7.89171 14.0474C7.89171 14.3891 7.62504 14.6724 7.26671 14.6724ZM9.59171 11.5807H5.06671C4.72504 11.5807 4.44171 11.2974 4.44171 10.9557C4.44171 10.6057 4.72504 10.3224 5.06671 10.3224H9.59171C9.93337 10.3224 10.225 10.6057 10.225 10.9557C10.225 11.2974 9.93337 11.5807 9.59171 11.5807Z"
                            fill="white" />
                    </svg>
                    <p>Report Kerusakan</p>
                </div>
            </a>
            <a class="outer-icon" id="setting" href="{{ route('super-admin.setting.index') }}">
                <div class="group-icon">
                    <img class="icon-close-dashboard" src="{{ asset('images/icon/setting.svg') }}" alt="logo" />
                    <p>Setting</p>
                </div>
            </a>
        </div>

        <!-- Logout Link with Label -->
        <a class="logout2" href="{{ route('login') }}">
            <img class="icon-logout" src="{{ asset('images/icon/logout.svg') }}" alt="logo" />
            <p style="margin: 0;">Logout</p>
        </a>
    </div>
</div>

<!-- JavaScript for Sidebar Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        /**
         * Function to set the active icon based on the current route.
         * Adds 'outer-icon-active' to the active link in the closed sidebar
         * and 'outer-icon-active2' to the corresponding menu in the open sidebar.
         * Additionally, adds 'outer-icon-active' to the corresponding 'outer-icon2'
         * in the closed sidebar for active submenus.
         */
        function setActiveIconBasedOnRoute() {
            const currentUrl = window.location.href;
            const closedSidebar = document.querySelector('.container-close-sidebar');
            const openSidebar = document.querySelector('.container-open-sidebar');
            const links = document.querySelectorAll(
                '.container-close-sidebar a.outer-icon, .container-open-sidebar a.outer-icon');

            // Remove existing active classes from all links in the closed sidebar
            closedSidebar.querySelectorAll('a.outer-icon').forEach(link => {
                link.classList.remove('outer-icon-active');
            });

            // Remove 'outer-icon-active2' from all menus in the open sidebar
            if (openSidebar) {
                openSidebar.querySelectorAll('.outer-icon2').forEach(element => {
                    element.classList.remove('outer-icon-active2');
                });
            }

            // Remove 'outer-icon-active' from all 'outer-icon2' in closed sidebar
            closedSidebar.querySelectorAll('.outer-icon2').forEach(element => {
                element.classList.remove('outer-icon-active');
            });

            // Mapping between menu classes and closed sidebar IDs
            const menuMapping = {
                'transaksi': 'transaksi-close2',
                'master': 'master-close2',
                'balance': 'balance-close2'
            };

            links.forEach(link => {
                const linkHref = link.getAttribute('href');

                // Ensure the href is not empty and is a valid URL
                if (linkHref && currentUrl.includes(linkHref)) {
                    // Add active class to the link in the closed sidebar
                    link.classList.add('outer-icon-active');

                    // Check if the link is within the open sidebar
                    if (openSidebar && openSidebar.contains(link)) {
                        // Find the closest submenu container
                        let parentMenu = link.closest(
                            '.sub-menu-transaksi, .sub-menu-master, .sub-menu-balance');
                        let menuClass = '';

                        if (parentMenu) {
                            if (parentMenu.classList.contains('sub-menu-transaksi')) {
                                menuClass = 'transaksi';
                            } else if (parentMenu.classList.contains('sub-menu-master')) {
                                menuClass = 'master';
                            } else if (parentMenu.classList.contains('sub-menu-balance')) {
                                menuClass = 'balance';
                            }

                            if (menuClass && menuMapping[menuClass]) {
                                // Select the corresponding outer-icon2 in the open sidebar and add 'outer-icon-active2'
                                const openMenuElement = openSidebar.querySelector(
                                    `.menu-${menuClass} .outer-icon2`);
                                if (openMenuElement) {
                                    openMenuElement.classList.add('outer-icon-active2');
                                }

                                // Select the corresponding outer-icon2 in the closed sidebar and add 'outer-icon-active'
                                const closedMenuId = menuMapping[menuClass];
                                const closedMenuElement = closedSidebar.querySelector(
                                    `#${closedMenuId}`);
                                if (closedMenuElement) {
                                    closedMenuElement.classList.add('outer-icon-active');
                                }
                            }
                        }
                    }
                }
            });
        }

        /**
         * Function to set the initial state of the sidebar based on localStorage.
         */
        function setSidebarState() {
            const sidebarState = localStorage.getItem('sidebarState');
            if (sidebarState === 'open') {
                toggleShiftedClasses();
            }
        }

        /**
         * Helper function to toggle the 'shifted' classes for common elements.
         */
        function toggleShiftedClasses() {
            const elements = [
                '.content',
                '.content-wrapper',
                '.container-close-sidebar',
                '.container-open-sidebar',
                '.user-default2'
            ];

            elements.forEach(selector => {
                const element = document.querySelector(selector);
                if (element) {
                    element.classList.toggle('shifted');
                }
            });
        }

        /**
         * Function to close all submenus except the specified one.
         * @param {string} except - The menu to exclude from closing.
         */
        function closeOtherSubMenus(except) {
            const subMenus = ['transaksi', 'master', 'balance'];
            subMenus.forEach(menu => {
                if (menu !== except) {
                    const subMenuElement = document.querySelector(`.sub-menu-${menu}`);
                    const menuElement = document.querySelector(`.menu-${menu}`);

                    if (subMenuElement && menuElement) { // Ensure elements exist
                        subMenuElement.classList.remove('shifted');
                        menuElement.classList.remove('shifted');
                        localStorage.setItem(`subMenu${capitalizeFirstLetter(menu)}`, 'closed');
                    }
                }
            });
        }

        /**
         * Helper function to capitalize the first letter of a string.
         * @param {string} string - The string to capitalize.
         * @returns {string} - The capitalized string.
         */
        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        /**
         * Function to set the state of the Transaksi submenu.
         */
        function setSubMenuTransaksi() {
            const currentUrl = window.location.href;
            if (currentUrl.includes('transaction')) {
                document.querySelector('.sub-menu-transaksi').classList.add('shifted');
                document.querySelector('.menu-transaksi').classList.add('shifted');
                localStorage.setItem('subMenuTransaksi', 'open');
                closeOtherSubMenus('transaksi');
            } else {
                const subMenuTransaksi = localStorage.getItem('subMenuTransaksi');
                if (subMenuTransaksi === 'open') {
                    document.querySelector('.sub-menu-transaksi').classList.add('shifted');
                    document.querySelector('.menu-transaksi').classList.add('shifted');
                }
            }
        }

        /**
         * Function to set the state of the Master submenu.
         */
        function setSubMenuMaster() {
            const currentUrl = window.location.href;
            if (currentUrl.includes('datamaster')) {
                document.querySelector('.sub-menu-master').classList.add('shifted');
                document.querySelector('.menu-master').classList.add('shifted');
                localStorage.setItem('subMenuMaster', 'open');
                closeOtherSubMenus('master');
            } else {
                const subMenuMaster = localStorage.getItem('subMenuMaster');
                if (subMenuMaster === 'open') {
                    document.querySelector('.sub-menu-master').classList.add('shifted');
                    document.querySelector('.menu-master').classList.add('shifted');
                }
            }
        }

        /**
         * Function to set the state of the Balance submenu.
         */
        function setSubMenuBalance() {
            const currentUrl = window.location.href;
            if (currentUrl.includes('checking-and-balancing')) {
                document.querySelector('.sub-menu-balance').classList.add('shifted');
                document.querySelector('.menu-balance').classList.add('shifted');
                localStorage.setItem('subMenuBalance', 'open');
                closeOtherSubMenus('balance');
            } else {
                const subMenuBalance = localStorage.getItem('subMenuBalance');
                if (subMenuBalance === 'open') {
                    document.querySelector('.sub-menu-balance').classList.add('shifted');
                    document.querySelector('.menu-balance').classList.add('shifted');
                }
            }
        }

        // Event listener for Transaksi menu click
        const transaksiMenu = document.querySelector('.menu-transaksi');
        if (transaksiMenu) {
            transaksiMenu.addEventListener('click', function() {
                const subMenuTransaksi = document.querySelector('.sub-menu-transaksi');
                const isOpen = subMenuTransaksi.classList.toggle('shifted');
                transaksiMenu.classList.toggle('shifted');

                if (isOpen) {
                    localStorage.setItem('subMenuTransaksi', 'open');
                    closeOtherSubMenus('transaksi');
                } else {
                    localStorage.setItem('subMenuTransaksi', 'closed');
                }
            });
        }

        // Event listener for Master menu click
        const masterMenu = document.querySelector('.menu-master');
        if (masterMenu) {
            masterMenu.addEventListener('click', function() {
                const subMenuMaster = document.querySelector('.sub-menu-master');
                const isOpen = subMenuMaster.classList.toggle('shifted');
                masterMenu.classList.toggle('shifted');

                if (isOpen) {
                    localStorage.setItem('subMenuMaster', 'open');
                    closeOtherSubMenus('master');
                } else {
                    localStorage.setItem('subMenuMaster', 'closed');
                }
            });
        }

        // Event listener for Balance menu click
        const balanceMenu = document.querySelector('.menu-balance');
        if (balanceMenu) {
            balanceMenu.addEventListener('click', function() {
                const subMenuBalance = document.querySelector('.sub-menu-balance');
                const isOpen = subMenuBalance.classList.toggle('shifted');
                balanceMenu.classList.toggle('shifted');

                if (isOpen) {
                    localStorage.setItem('subMenuBalance', 'open');
                    closeOtherSubMenus('balance');
                } else {
                    localStorage.setItem('subMenuBalance', 'closed');
                }
            });
        }

        // Event listener for 'transaksi-close2' to open the sidebar
        const transaksiClose2 = document.getElementById('transaksi-close2');
        if (transaksiClose2) {
            transaksiClose2.addEventListener('click', function() {
                toggleShiftedClasses();

                const subMenuTransaksi = document.querySelector('.sub-menu-transaksi');
                const menuTransaksi = document.querySelector('.menu-transaksi');

                subMenuTransaksi.classList.add('shifted');
                menuTransaksi.classList.add('shifted');
                localStorage.setItem('subMenuTransaksi', 'open');
                closeOtherSubMenus('transaksi');
            });
        }

        // Event listener for 'master-close2' to open the sidebar
        const masterClose2 = document.getElementById('master-close2');
        if (masterClose2) {
            masterClose2.addEventListener('click', function() {
                toggleShiftedClasses();

                const subMenuMaster = document.querySelector('.sub-menu-master');
                const menuMaster = document.querySelector('.menu-master');

                subMenuMaster.classList.add('shifted');
                menuMaster.classList.add('shifted');
                localStorage.setItem('subMenuMaster', 'open');
                closeOtherSubMenus('master');
            });
        }

        // Event listener for 'balance-close2' to open the sidebar
        const balanceClose2 = document.getElementById('balance-close2');
        if (balanceClose2) {
            balanceClose2.addEventListener('click', function() {
                toggleShiftedClasses();

                const subMenuBalance = document.querySelector('.sub-menu-balance');
                const menuBalance = document.querySelector('.menu-balance');

                subMenuBalance.classList.add('shifted');
                menuBalance.classList.add('shifted');
                localStorage.setItem('subMenuBalance', 'open');
                closeOtherSubMenus('balance');
            });
        }

        /**
         * Event listener for the sidebar toggle button.
         * This assumes there's an element with the ID 'sidebar-button' to toggle the sidebar.
         * If not present, you may need to add it or adjust accordingly.
         */
        const sidebarButton = document.getElementById('sidebar-button');
        if (sidebarButton) {
            sidebarButton.addEventListener('click', function() {
                toggleShiftedClasses();

                const closedSidebar = document.querySelector('.container-close-sidebar');
                const sidebarState = closedSidebar.classList.contains('shifted') ? 'open' : 'closed';
                // localStorage.setItem('sidebarState', sidebarState);

                $('#table-master-user').DataTable().draw();
                $('#table-master-user1').DataTable().draw();
                $('#table-master-user2').DataTable().draw();
                $('#table-master-user3').DataTable().draw();
                $('#table-master-user4').DataTable().draw();
                $('#table-master-user5').DataTable().draw();
                $('#table-master-user6').DataTable().draw();
                $('#table-master-user7').DataTable().draw();
                $('#table-master-user8').DataTable().draw();
                $('#table-master-user9').DataTable().draw();
                $('#table-master-user10').DataTable().draw();
                $('#table-master-user11').DataTable().draw();
                $('#table-master-user12').DataTable().draw();
                $('#table-master-user13').DataTable().draw();
                $('#table-master-user14').DataTable().draw();
                $('#table-master-user15').DataTable().draw();

                $('#table-master-user').DataTable().columns.adjust().draw();
                $('#table-master-user1').DataTable().columns.adjust().draw();
                $('#table-master-user2').DataTable().columns.adjust().draw();
                $('#table-master-user3').DataTable().columns.adjust().draw();
                $('#table-master-user4').DataTable().columns.adjust().draw();
                $('#table-master-user5').DataTable().columns.adjust().draw();
                $('#table-master-user6').DataTable().columns.adjust().draw();
                $('#table-master-user7').DataTable().columns.adjust().draw();
                $('#table-master-user8').DataTable().columns.adjust().draw();
                $('#table-master-user9').DataTable().columns.adjust().draw();
                $('#table-master-user10').DataTable().columns.adjust().draw();
                $('#table-master-user11').DataTable().columns.adjust().draw();
                $('#table-master-user12').DataTable().columns.adjust().draw();
                $('#table-master-user13').DataTable().columns.adjust().draw();
                $('#table-master-user14').DataTable().columns.adjust().draw();
                $('#table-master-user15').DataTable().columns.adjust().draw();
            });

            // setTimeout(() => {
            //     $('#sidebar-button').trigger('click');
            // }, 100);
        }

        // Initialize the sidebar and submenus based on the current state
        // setSidebarState();
        setSubMenuTransaksi();
        setSubMenuMaster();
        setSubMenuBalance();
        setActiveIconBasedOnRoute();
    });
</script>
