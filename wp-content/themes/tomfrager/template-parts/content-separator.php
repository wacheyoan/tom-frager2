<?php $image = get_field('image') ?>
<div class="separator-container">
    <?php if(the_field('title')) : ?>
        <div class="title-container">
            <h2 style="color:<?= the_field('color') ?>;"><?= the_field('title') ?></h2>
        </div>
    <?php
    endif;
    if ($image) {
        ?>
        <div class="image-container">
            <img src="<?= $image ?>" alt="">
        </div>
        <?php
    } else { ?>
        <div class="separator">
            <svg width="210" height="9" viewBox="0 0 210 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip1)">
                    <path d="M209.917 6.8164C210.165 6.60338 209.835 6.76314 209.422 6.8164H209.917Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M206.116 6.76321C206.86 6.6567 207.769 6.76321 208.182 6.55019C207.769 6.49694 207.355 6.49694 206.942 6.55019C206.529 6.55019 206.198 6.6567 206.116 6.76321Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M207.19 6.92316L207.273 6.81665C207.025 6.8699 206.86 6.97641 206.612 7.02967C206.86 6.97641 207.025 6.92316 207.19 6.92316Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M207.686 7.02957L207.603 6.97632C207.273 7.02957 206.942 7.08283 206.529 7.13608C206.942 7.08283 207.355 7.02957 207.686 7.02957Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M203.554 6.65682C203.802 6.65682 204.05 6.65682 204.298 6.65682C204.959 6.81658 203.802 6.86984 204.298 6.97635C205.289 6.97635 204.628 6.60357 205.785 6.65682C205.702 6.49706 203.884 6.65682 204.132 6.39055C203.14 6.33729 204.05 6.60357 203.554 6.65682Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M146.446 6.23071C146.281 6.23071 146.116 6.23071 145.95 6.28397C146.033 6.28397 146.116 6.28397 146.198 6.33722L146.446 6.23071Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M166.033 3.19531C166.198 3.24857 166.364 3.24857 166.529 3.24857C166.364 3.19531 166.281 3.19531 166.033 3.19531Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M87.2727 3.14191C87.2727 3.14191 87.3546 3.08865 87.3546 3.0354L87.2727 3.14191Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M132.479 8.73364C132.231 8.73364 132.066 8.7869 131.901 8.7869C132.231 8.7869 132.397 8.73364 132.479 8.73364Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M170.495 3.35497C170.413 3.35497 170.331 3.35497 170.331 3.35497C170.331 3.30171 170.413 3.35497 170.495 3.35497Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M150.496 5.80469C150.331 5.80469 150.165 5.85794 150.083 5.85794C150.248 5.85794 150.413 5.85794 150.496 5.80469Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M192.149 5.21903C191.983 5.16577 191.736 5.16577 191.57 5.16577C191.736 5.21903 191.901 5.27228 192.149 5.21903Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M191.653 5.16564C191.322 5.00587 191.322 4.68635 190.744 4.95262L190.826 5.00587C190.579 4.89936 190.083 4.95262 189.752 4.89936C189.752 4.95262 189.835 4.95262 189.835 5.00587C190 5.05913 190.165 5.05913 190.496 5.16564C190.909 5.3254 191.24 5.16564 191.653 5.16564Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M158.43 3.99414C158.512 4.0474 158.759 3.99414 158.43 3.99414V3.99414Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M162.149 3.4082C162.066 3.4082 161.901 3.4082 161.736 3.4082C161.901 3.46146 161.983 3.46146 162.149 3.4082Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M176.362 4.20702C176.362 4.20702 176.362 4.15376 176.362 4.20702C176.283 4.20702 176.362 4.20702 176.362 4.20702Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M161.405 3.46157H161.736C161.653 3.40832 161.57 3.40832 161.405 3.46157Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M29.5868 0.585757C29.9174 0.585757 30 0.74552 30.3306 0.798775C31.0744 0.692266 29.0083 0.585757 30 0.532502C29.7521 0.479248 29.5042 0.479248 29.2562 0.479248C29.3389 0.585757 29.5042 0.639011 29.5868 0.74552C30.1653 0.74552 29.2562 0.639011 29.5868 0.585757Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M83.4711 3.2486H83.6364C83.5537 3.14209 83.5537 3.14209 83.0579 3.14209C82.7273 3.35511 83.4711 3.46162 82.8099 3.72789C82.9752 3.67463 83.1405 3.67463 83.3058 3.67463C82.9752 3.56813 83.2232 3.40836 83.4711 3.2486Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M83.3058 3.67456C83.3058 3.67456 83.3884 3.67456 83.3058 3.67456C83.3884 3.67456 83.3884 3.72781 83.4711 3.72781C83.5537 3.72781 83.6364 3.72781 83.719 3.72781C83.719 3.67456 83.5537 3.67456 83.3058 3.67456Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M39.0909 2.60938C39.2562 2.60938 39.3388 2.66263 39.4215 2.66263C39.2562 2.60937 39.1735 2.60938 39.0909 2.60938Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M132.81 5.85797C132.975 5.80472 133.058 5.80472 133.141 5.75146C132.975 5.80472 132.893 5.85797 132.81 5.85797Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M90.4958 2.50296C90.5785 2.50296 90.7438 2.50296 90.8264 2.50296C90.9091 2.50296 90.9917 2.50296 91.0744 2.44971L90.4958 2.50296Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M68.595 8.14771C68.7603 7.88144 68.4297 8.20096 67.8512 8.09445L67.438 8.30747C67.8512 8.30747 68.2644 8.20096 68.595 8.14771Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M54.2149 8.57401C54.1322 8.57401 54.0496 8.52075 53.9669 8.52075C53.9669 8.57401 54.0496 8.57401 54.2149 8.57401Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M86.0331 3.35511C86.6116 3.2486 87.1901 3.19534 87.7686 3.14209H87.2728C87.0248 3.2486 86.1984 3.14209 86.0331 3.35511Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M76.0331 7.13618L76.281 7.24269C77.8512 6.60364 80 6.71015 81.0744 6.01784C83.3058 6.1776 82.2314 5.32553 84.2975 5.48529L84.2149 5.43204C87.2727 4.95275 90.4132 4.63322 93.4711 4.47346C96.281 4.36695 99.0909 4.73973 101.983 5.11251L101.901 5.21902C104.132 5.64506 106.364 6.1776 108.678 6.65689C109.835 6.86991 110.992 7.13618 112.231 7.29594L115.702 7.82849C117.934 8.14802 120.331 8.57405 122.893 8.84032C124.132 8.94683 125.455 9.00009 126.777 9.05334H128.678C129.339 9.05334 129.917 9.00009 130.579 9.00009C131.488 8.84032 130.909 8.68056 131.736 8.46754C132.066 8.46754 132.893 8.36103 132.893 8.5208C132.231 8.62731 132.645 8.73382 132.397 8.78707C132.975 8.73382 133.636 8.73381 134.215 8.68056C134.876 8.62731 135.455 8.57405 135.95 8.41429L135.041 8.36103C135.372 8.25452 136.033 8.20127 136.364 8.20127C136.281 8.30778 136.777 8.41429 136.529 8.5208C138.43 7.82849 138.182 8.46754 139.835 8.04151C139.917 7.82849 140.496 7.56222 141.157 7.29594C141.818 7.02967 142.645 6.71015 143.306 6.49713L144.05 6.44387C143.058 6.60364 144.215 6.71015 142.975 6.86991C144.05 6.81665 144.876 6.44387 145.785 6.33736C145.537 6.28411 145.537 6.1776 145.95 6.07109C146.529 6.01784 146.694 6.1776 147.355 6.07109L146.777 6.28411C147.273 6.33736 147.521 6.07109 147.934 6.01784C148.099 6.12435 149.091 5.96458 149.008 6.1776C149.752 5.80482 150.165 5.85807 150.992 5.5918C150 5.5918 151.157 5.37878 150.992 5.27228L149.917 5.53855C151.488 5.32553 149.421 5.64506 149.669 5.85807C148.926 5.85807 150.496 5.27228 149.256 5.53855C150.661 5.16577 150.992 5.21902 152.397 4.73973C151.488 4.95275 152.479 4.52671 151.983 4.57997C153.14 4.36695 152.314 4.63322 152.727 4.73973C153.306 4.63322 153.636 4.73973 154.132 4.47346C155.207 4.36695 154.05 4.68648 154.628 4.68648C154.298 4.89949 151.736 4.95275 152.231 5.43204C151.736 5.53855 151.157 5.85807 150.413 5.96458C151.074 5.91133 152.066 5.91133 152.893 5.64506V5.21902C153.471 5.11251 153.554 4.89949 153.967 4.84624C153.802 4.95275 154.215 5.05926 154.711 4.95275C154.545 4.95275 154.38 4.95275 154.38 4.89949C155.289 4.73973 155.372 4.52671 156.446 4.3137C155.537 4.36695 155.289 4.26044 154.38 4.3137C154.545 4.04742 154.959 4.20719 155.455 4.10068C155.372 4.15393 155.289 4.15393 155.455 4.20719L155.95 4.04742C157.107 3.99417 155.95 4.36695 156.859 4.36695C157.521 4.47346 157.686 4.15393 158.264 4.20719L158.182 4.15393C158.264 4.15393 158.347 4.15393 158.43 4.15393C159.008 4.04742 159.669 3.99417 159.835 3.83441C159.917 3.88766 160.331 3.78115 160.579 3.7279C160.909 3.62139 161.653 3.35512 162.231 3.62139C162.975 3.62139 163.554 3.67464 163.471 3.78115H164.711L164.463 3.83441C165.537 3.78115 165.455 3.67464 166.198 3.40837C166.612 3.46162 167.107 3.46162 167.686 3.46162C168.182 3.46162 168.678 3.46162 168.926 3.40837C169.008 3.40837 169.174 3.40837 169.339 3.40837L168.843 3.30186C169.752 3.35512 169.587 3.24861 170.248 3.24861C170.165 3.24861 170.083 3.19535 170.413 3.24861C170.496 3.24861 170.579 3.30186 170.744 3.30186C170.744 3.30186 170.579 3.30186 170.413 3.30186L170.496 3.40837C171.157 3.67464 171.57 3.35512 172.314 3.51488C172.231 3.51488 172.149 3.51488 172.066 3.51488C172.479 3.62139 172.975 3.94091 173.223 3.78115C173.306 3.83441 173.471 3.78115 173.636 3.78115L173.967 3.83441C173.884 3.83441 173.719 3.78115 173.636 3.78115C173.802 3.7279 174.05 3.67464 174.05 3.7279L175.124 3.88766C175.289 3.94092 175.62 3.94091 175.868 3.94091L176.033 4.04742C176.446 4.10068 176.446 4.15393 176.364 4.15393C177.603 4.63322 178.512 4.26044 179.835 4.73973C180.165 4.63322 179.587 4.47346 179.587 4.4202C179.835 4.36695 180.744 4.36695 181.157 4.36695C181.736 4.68648 183.636 5.16577 183.223 5.43204C184.38 5.64506 182.893 5.21902 183.554 5.16577L183.719 5.21902C183.306 5.11251 183.058 4.95275 182.81 4.79299C182.81 4.63322 183.884 4.73973 184.132 4.84624L183.802 5.006C184.959 5.11251 184.876 4.73973 185.62 4.63322C186.446 4.84624 185.868 5.006 185.95 5.21902L186.859 5.32553L186.777 5.48529C187.438 5.53855 187.603 5.43204 188.43 5.5918C187.769 5.64506 189.587 5.96458 188.678 6.01784C189.091 6.12435 189.339 5.85807 189.504 6.12435C189.917 6.01784 189.091 5.96458 188.926 5.85807C188.843 5.5918 190 5.91133 190.579 5.91133C190.579 6.07109 190.165 6.01784 190.744 6.1776C190.909 6.12435 191.405 6.07109 191.736 6.28411C191.818 6.12435 192.479 6.39062 192.893 6.44387C192.479 6.33736 191.901 6.12435 192.231 6.01784C192.562 6.01784 192.893 6.01784 193.636 6.12435L193.14 5.96458C193.884 5.80482 194.132 6.28411 195.041 6.33736C194.628 6.39062 194.38 6.33736 194.05 6.44387C194.463 6.44387 195.372 6.44387 196.033 6.39062L196.694 6.71015C196.859 6.60364 197.521 6.81665 197.603 6.65689C198.512 6.86991 196.777 6.7634 196.694 6.86991C197.851 7.08293 197.686 6.71015 198.76 7.08293L198.347 7.18944C198.76 7.24269 199.504 7.18944 199.587 7.29594C199.587 7.24269 199.421 7.24269 199.174 7.24269C199.504 6.92316 200.992 7.13618 200.909 6.7634L200.413 6.71015C201.24 6.71015 201.818 6.49713 202.397 6.65689C202.893 6.81665 202.066 6.86991 201.736 6.97642C202.479 7.02967 202.397 6.60364 203.306 6.71015C202.81 6.65689 202.975 6.49713 203.223 6.44387C202.727 6.39062 201.653 6.28411 201.818 6.44387L201.983 6.49713C201.901 6.60364 201.653 6.60364 201.488 6.65689C200.744 6.60364 201.157 6.49713 201.074 6.39062C199.917 6.23086 200.909 6.71015 199.835 6.65689L199.669 6.60364C199.174 6.65689 198.347 6.60364 198.099 6.81665C197.686 6.55038 196.859 6.7634 196.364 6.55038C196.364 6.01784 198.182 6.81665 198.843 6.55038C198.264 6.39062 199.256 6.33736 199.504 6.23086C198.926 6.23086 198.264 6.28411 197.686 6.28411C197.521 6.1776 197.107 5.91133 196.777 6.01784L196.942 6.07109C196.198 6.07109 196.364 6.28411 195.785 6.12435C195.702 6.07109 195.95 6.01784 195.95 5.96458C195.372 5.85807 195.455 6.01784 195.041 6.01784C194.463 5.91133 195.372 5.85807 194.959 5.75157C194.215 5.85807 193.967 5.5918 193.388 5.48529C193.554 5.80482 190.992 5.53855 192.149 5.96458H190.744C190.413 5.75157 191.818 5.69831 191.488 5.43204L192.562 5.5918C192.479 5.21902 190.248 5.48529 189.669 4.95275C189.091 4.84624 189.256 4.89949 188.182 4.57997L188.264 4.89949C187.769 4.73973 187.603 4.52671 187.603 4.47346C187.273 4.4202 186.942 4.36695 186.694 4.3137C186.777 4.26044 186.942 4.26044 187.107 4.26044C186.777 3.99417 186.612 4.04742 186.446 4.15393C186.198 4.20719 185.868 4.10068 185.537 4.04742L185.868 3.99417C185.62 3.99417 185.372 3.99417 185.289 4.04742C185.124 4.04742 185.041 3.99417 184.876 3.99417C184.959 4.04742 185.124 4.26044 185.537 4.4202C184.298 4.10068 183.223 3.99417 182.231 3.56813C182.314 3.46162 182.81 3.46162 182.645 3.40837C182.066 3.24861 181.405 3.35512 181.405 3.46162C181.24 3.46162 181.157 3.46162 181.074 3.40837C180.992 3.30186 180.909 3.19535 180.661 3.1421C180.579 3.08884 180.496 3.08884 180.331 3.03559C180.083 3.24861 179.008 2.98233 178.76 3.03559C179.008 3.08884 179.339 3.1421 179.669 3.19535C179.174 3.30186 178.678 3.40837 178.347 3.24861C179.256 3.19535 177.521 2.87583 178.843 2.98233C178.017 2.5563 178.264 3.1421 177.355 2.87583L176.777 2.66281C176.942 2.50304 177.769 2.71606 177.686 2.60955L177.273 2.5563C177.769 2.50305 179.339 2.76932 180.413 2.76932C179.752 2.66281 179.091 2.50304 178.43 2.39654C175.868 2.23677 172.727 1.65097 170.413 1.91725H170.496C170.496 1.91725 170.413 1.9705 170.413 2.02375L170.331 1.9705C170.165 2.02376 170 2.02376 169.917 2.07701C169.421 1.86399 168.512 1.81074 167.769 1.65097C168.264 1.81074 168.264 1.81074 168.264 1.91725C168.182 2.07701 168.099 2.18352 167.355 2.07701C167.355 1.9705 167.769 1.9705 167.273 1.86399C167.521 1.91725 167.273 2.02375 166.942 2.02375C166.529 1.91725 165.868 1.91725 165.868 1.81074C166.033 1.75748 166.198 1.81074 166.364 1.86399C166.529 1.81074 165.62 1.75748 166.198 1.65097L165.455 1.70423C165.041 1.59772 165.785 1.54446 165.537 1.43796C164.298 1.49121 163.636 1.86399 162.562 1.9705C162.645 1.91725 162.562 1.59772 162.562 1.70423C161.653 1.65097 160.744 2.13026 159.752 2.23677C159.917 2.13026 160.248 2.13026 160.579 2.07701C157.521 2.18352 155.124 2.50304 152.314 2.71606L151.736 3.1421L150.992 3.08884C148.099 3.40837 146.033 3.99417 143.388 4.57997C142.562 4.73973 142.81 4.47346 142.397 4.47346C140.579 4.73973 140.331 5.16577 138.595 5.48529C138.76 5.37878 139.091 5.05926 138.347 5.16577C138.264 5.27228 138.182 5.43204 137.686 5.43204L137.851 5.32553C137.355 5.27228 137.025 5.43204 136.116 5.48529C134.545 5.69831 133.14 6.07109 131.901 6.49713C130.496 6.60364 131.983 6.1776 131.736 6.12435C132.727 6.1776 132.397 6.01784 132.562 5.91133C132.066 6.01784 131.488 6.12435 131.157 5.96458C130.413 6.01784 130.165 6.01784 129.421 6.1776C129.752 6.07109 130.083 6.1776 129.752 6.28411C129.421 6.28411 128.926 6.28411 128.512 6.28411C128.099 6.28411 127.686 6.23086 127.769 6.07109C126.116 6.12435 124.38 6.07109 122.562 5.85807C120.826 5.64506 118.926 5.32553 117.107 5.05926C116.446 5.11251 117.603 5.16577 117.19 5.21902C116.198 5.27228 116.529 5.006 115.702 5.05926L116.033 4.95275C115.702 4.84624 115.124 4.79299 114.545 4.79299C113.967 4.79299 113.388 4.84624 112.893 4.79299C113.14 4.68648 112.149 4.52671 112.975 4.57997C112.479 4.52671 112.149 3.7279 111.736 3.78115L111.983 4.52671C111.901 4.57997 111.24 4.4202 111.322 4.47346C110.909 4.26044 110.496 3.99417 110.165 3.94091C110.083 3.7279 110.826 3.94091 111.24 3.99417C111.405 3.7279 109.917 3.56813 110.661 3.40837C109.752 3.30186 110.744 3.56813 110.165 3.56813L109.421 3.35512L110 3.56813C109.339 3.51488 109.008 3.67464 108.182 3.35512L107.107 3.46162C107.107 3.24861 106.446 3.30186 106.033 3.1421L106.364 3.03559C105.702 2.92908 105.537 2.82257 105.124 2.66281C105.537 2.5563 105.702 2.82257 105.95 2.66281L105.289 2.44979C105.207 2.5563 104.711 2.60955 105.207 2.76932C104.463 2.87583 104.05 2.98233 102.397 2.71606C101.736 2.39654 103.306 2.66281 103.058 2.39654C101.405 2.02375 100.744 2.60955 99.7521 2.44979C98.5124 2.18352 98.5124 2.39654 97.1901 2.29003C97.6859 2.18352 96.281 2.07701 96.0331 1.91725C96.1983 1.86399 96.4463 1.81074 96.6116 1.81074C96.1983 1.81074 95.7851 1.75748 95.9504 1.65097C95.9504 1.75748 95.5372 1.81074 94.9587 1.81074C94.3802 1.86399 93.6364 1.86399 93.2231 1.9705L93.3884 2.13026C92.6446 2.23677 91.7355 2.39654 90.9917 2.44979C89.9174 2.60955 90.1653 2.76932 89.4215 3.03559C88.9256 2.92908 88.9256 2.76932 89.0083 2.5563C89.3388 2.60955 89.8347 2.50304 90.3306 2.50304C90.9917 2.34328 91.6529 2.18352 92.2314 2.02375C92.8926 1.86399 93.4711 1.75748 94.2149 1.75748C94.5454 1.54446 94.2975 1.54446 93.8017 1.59772C93.3884 1.65097 92.8099 1.81074 92.4793 1.75748L92.562 1.70423C92.4793 1.70423 92.4793 1.70423 92.3967 1.70423C92.8926 1.59772 93.719 1.49121 93.8843 1.27819C92.9752 1.3847 93.3058 1.75748 92.1488 1.59772C91.3223 1.75748 90.6611 1.49121 90.1653 1.54446C89.6694 1.75748 89.7521 2.07701 88.4297 2.18352L88.9256 1.86399C87.438 2.02375 88.3471 2.29003 87.0248 2.44979C87.5207 2.39654 86.6116 2.71606 87.5207 2.60955C87.1074 2.76932 86.1983 2.92908 85.4545 2.98233C85.2893 3.03559 85.4545 3.08884 85.4545 3.1421C86.281 3.19535 86.6116 2.76932 87.3554 2.92908L87.8512 2.60955C88.595 2.60955 88.7603 2.82257 88.3471 2.92908C88.5124 2.87583 88.7603 2.82257 88.843 2.87583C89.0909 3.24861 87.9339 2.87583 87.7686 3.19535L88.2645 3.08884C88.595 3.30186 87.1074 3.46162 86.4463 3.51488C85.7025 3.51488 84.9587 3.56813 84.876 3.40837L85.8678 3.19535C85.2893 3.1421 84.6281 3.46162 84.0496 3.56813C83.9669 3.56813 83.9669 3.56813 83.8843 3.51488C83.8843 3.51488 83.9669 3.51488 83.9669 3.56813C83.8016 3.56813 83.719 3.56813 83.6364 3.56813C83.1405 3.62139 82.3967 3.88766 81.9008 3.88766L82.0661 4.04742V3.94091C82.562 3.88766 83.2231 3.83441 82.8926 4.04742C81.9008 4.3137 81.5702 4.10068 81.2397 3.99417C81.405 3.7279 82.2314 3.83441 82.7273 3.62139C82.314 3.46163 81.6529 3.78115 80.4959 3.83441C80.7438 3.62139 81.6529 3.7279 81.8182 3.46162C80.9091 3.56813 80.7438 3.78115 79.8347 3.88766C79.9174 3.7279 80.8264 3.56813 80.6611 3.40837L80 3.46162C81.405 3.19535 79.5868 3.19535 80.7438 2.92908C80.1653 2.92908 80.0826 3.24861 79.2562 3.24861C79.5041 3.30186 80.2479 3.40837 79.5041 3.67464L78.6777 3.7279C78.2645 3.67464 79.4215 3.30186 78.843 3.30186L78.0165 3.56813C78.0992 3.56813 78.5124 3.56813 78.3471 3.7279C77.8512 3.7279 77.686 4.15393 77.1074 4.36695C76.6116 4.4202 76.281 4.47346 76.0331 4.4202C74.9587 4.84624 73.5537 5.11251 72.562 5.48529C73.2231 5.21902 72.3967 5.21902 71.9835 5.16577C72.8099 5.006 72.7273 4.73973 72.562 4.57997C72.0661 4.68648 71.8182 5.006 72.1488 5.05926C71.2397 5.11251 71.6529 5.32553 70.8264 5.27228C70.3306 5.27228 70.9917 5.006 70.7438 4.95275C69.8347 5.11251 70.5785 5.27228 69.5868 5.37878C69.6694 5.32553 69.7521 5.32553 69.5868 5.27228C69.0083 5.27228 68.5124 5.48529 68.4297 5.64506C67.7686 5.43204 66.8595 5.85807 66.8595 5.53855C65.6198 5.80482 67.1074 5.69831 66.8595 5.80482C66.3636 6.01784 65.3719 6.01784 65.0413 5.96458C65.3719 5.91133 65.6198 5.80482 65.9504 5.80482L65.6198 5.64506C63.9669 5.64506 64.7107 6.23086 63.1405 6.1776C63.8843 6.01784 63.3884 6.01784 63.719 5.80482C63.4711 5.91133 62.2314 5.91133 63.0578 6.01784C62.4793 6.01784 62.0661 6.01784 61.6529 6.01784C61.157 6.12435 60.5785 6.1776 60.3306 6.33736C59.9174 6.33736 59.5868 6.28411 59.2562 6.23086C58.9256 6.1776 58.6777 6.07109 58.5124 6.01784C58.0992 6.01784 57.686 6.01784 57.2727 6.01784C56.8595 6.01784 56.4463 5.91133 56.0331 5.91133C55.6198 5.85807 55.2066 5.80482 54.7934 5.80482C54.3802 5.75157 53.9669 5.69831 53.4711 5.69831L53.6364 5.75157C52.2314 5.53855 54.1322 6.12435 52.7273 5.91133C52.9752 5.69831 51.9008 5.64506 51.4876 5.37878C49.7521 4.95275 48.3471 5.006 46.8595 4.52671C46.8595 4.47346 47.0248 4.4202 47.3554 4.47346C46.1983 4.10068 45.124 3.99417 44.0496 3.67464H44.1322C42.4793 3.08884 40.7438 2.92908 38.7603 2.5563C38.9256 2.5563 39.0083 2.44979 39.1736 2.44979C38.2645 2.18352 36.7769 1.81074 35.9504 1.86399C34.9587 1.3847 35.2066 1.75748 33.8017 1.22494C33.719 1.17168 33.9669 1.22494 34.0496 1.22494C33.3884 1.01192 32.8099 0.905412 32.0661 0.745648C30.2479 0.639139 29.7521 0.852157 27.8512 0.532631C27.8512 0.159849 29.0909 0.585885 29.2562 0.319613C28.843 0.319613 28.4298 0.372867 27.9339 0.213104C28.3471 0.106595 28.0165 0.106595 28.2645 0.0533405C28.0992 8.60598e-05 27.6033 8.60598e-05 27.1901 0.0533405C26.7769 0.266358 26.4463 0.319613 26.4463 0.319613C26.3636 0.372867 26.5289 0.426122 26.9421 0.479376C26.4463 0.639139 24.9587 0.319613 23.9669 0.319613C24.2149 0.372867 25.2066 0.532631 24.7934 0.639139C23.4711 0.426122 22.9752 0.852157 22.0661 0.958666C20.8264 0.745648 22.9752 0.692394 22.7273 0.426122C22.562 0.319613 22.0661 0.106595 22.562 8.60579e-05C21.9835 -0.0531684 21.4876 8.60598e-05 21.0744 0.0533405C20.5785 0.106595 20.1653 0.213104 19.6694 0.266358V0.213104C18.2645 0.266358 16.8595 0.798903 15.7025 0.798903H16.3636C16.1157 0.852157 15.4545 0.905412 15.124 1.11843C15.124 1.01192 14.2149 1.01192 14.5455 0.852157C14.1322 1.33145 11.6529 1.65097 11.2397 2.13026C10.8264 2.13026 10.9917 1.91725 11.0744 1.81074C11.9008 1.65097 12.2314 1.65097 12.562 1.43796C11.9835 1.59772 11.405 1.59772 11.4876 1.49121C10.9091 1.86399 9.42149 2.39654 9.2562 2.71606C8.67769 2.76932 8.18182 2.82257 8.26446 2.60955C6.36364 3.40837 9.58678 2.82257 7.43802 3.56813C6.36364 3.78115 8.18182 2.98233 6.8595 3.46162L7.10744 3.35512C5.70248 3.24861 6.69421 3.88766 5.61983 4.3137C5.20661 4.15393 6.19835 3.83441 5.28926 3.99417C4.38017 4.47346 4.38017 5.006 3.47107 5.37878V5.21902C2.89256 5.53855 1.81818 6.07109 1.32231 6.39062C1.23967 6.33736 1.32231 6.33736 1.40496 6.23086C0.330579 6.71015 1.15702 6.60364 0.165289 6.92316L0 7.18944C0.495868 7.02967 1.40496 6.65689 1.73554 6.23086C1.40496 6.65689 2.89256 6.01784 2.89256 6.39062V6.28411C4.6281 5.85807 6.44628 5.006 8.5124 4.47346C9.50413 3.78115 10.6612 3.88766 11.9008 3.35512C11.9835 2.98234 12.1488 3.19535 13.3058 2.92908C12.6446 3.08884 13.3884 3.19535 13.8017 3.1421C13.9669 3.03559 14.2975 2.92908 14.5455 2.82257C14.876 2.87583 16.5289 2.82257 17.0248 2.5563C17.7686 2.5563 16.8595 2.66281 16.7769 2.76932C17.1074 2.87583 17.3554 2.5563 17.6033 2.66281C17.6033 2.66281 17.6033 2.71606 17.5207 2.71606C18.0992 2.66281 18.5124 2.60955 19.0083 2.60955C19.5041 2.60955 19.9174 2.60955 20.4959 2.60955C20.4959 2.44979 20.8264 2.39654 21.157 2.39654C21.4876 2.39654 21.9008 2.44979 22.1488 2.39654C21.9835 2.50304 22.8099 2.5563 23.1405 2.60955C23.3884 2.5563 23.5537 2.44979 23.8017 2.39654C24.4628 2.23677 24.7107 2.60955 25.5372 2.5563L25.3719 2.50304C26.0331 2.44979 27.5207 2.82257 28.0992 3.08884C30.9917 3.19535 33.1405 3.67464 35.2066 4.3137C37.2727 4.89949 39.3388 5.64506 42.3967 6.23086C42.8099 6.23086 42.2314 6.01784 42.562 5.96458C43.1405 6.07109 43.3058 6.12435 43.8843 6.23086C43.4711 6.01784 43.4711 6.1776 43.5537 6.07109L42.6446 5.96458C42.6446 5.91133 42.7273 5.96458 42.6446 5.85807C42.314 5.80482 41.9835 5.80482 41.6529 5.69831C42.2314 5.75157 42.4793 5.53855 43.1405 5.80482C43.0578 5.80482 42.9752 5.80482 42.8099 5.80482C43.3884 5.96458 43.4711 5.85807 43.8843 6.01784C44.3802 6.1776 44.2975 6.07109 44.2975 6.1776L45.9504 6.65689C46.9421 6.55038 47.8512 7.02967 48.0992 7.08293C47.8512 7.24269 46.9421 6.92316 46.4463 7.02967L47.0248 7.29594L47.1074 7.13618L47.9339 7.3492H47.8512C48.0165 7.29594 48.0992 7.24269 48.3471 7.3492C48.3471 7.40245 48.4297 7.45571 48.3471 7.45571C48.595 7.45571 48.7603 7.45571 49.0083 7.45571C48.595 7.56222 49.5868 7.61547 49.3388 7.77523C51.405 8.25453 52.1488 7.935 53.9669 8.46754C53.719 8.36103 54.6281 8.20127 55.2066 8.30778C55.5372 8.36103 55.6198 8.41429 55.3719 8.5208L56.1983 8.46754C56.6942 8.68056 57.1901 8.73382 57.686 8.73382C58.2645 8.73382 58.843 8.78707 59.5868 8.78707L59.5041 8.94683C60.0826 8.84032 60.6612 8.73382 61.405 8.73382L61.2397 8.89358C62.2314 9.00009 61.9835 8.46754 63.0578 8.5208C63.0578 8.30778 62.314 8.25452 62.2314 8.09476C62.4793 8.25452 63.6364 8.25452 63.3884 8.09476C64.4628 7.935 64.1322 8.04151 64.2149 8.09476L64.7934 7.935C65.5372 7.88174 65.124 8.14802 64.876 8.30778C65.5372 8.04151 66.281 8.14802 67.1074 8.04151L66.8595 8.14802L67.8512 8.04151C68.5124 7.82849 69.3388 7.66873 70.2479 7.61547L69.7521 7.935C70.4132 7.98825 70 7.82849 70.1653 7.72198C71.0744 7.45571 71.3223 7.61547 71.9008 7.66873C73.2231 7.29594 74.9587 7.72198 76.0331 7.13618ZM176.116 4.04742L176.033 3.99417C176.281 3.99417 176.446 3.94091 176.116 4.04742ZM168.099 3.24861C169.091 3.19535 168.76 3.30186 168.843 3.35512C167.934 3.24861 167.355 3.30186 166.529 3.19535C166.694 3.24861 166.694 3.30186 166.694 3.35512C166.364 3.35512 166.033 3.30186 165.95 3.1421C166.198 3.03559 166.777 3.03559 167.355 3.1421C167.851 3.24861 168.264 3.35512 168.099 3.24861ZM186.529 4.26044C186.529 4.26044 186.446 4.26044 186.364 4.3137L186.529 4.26044ZM181.736 3.7279C181.653 3.67464 181.57 3.62139 181.405 3.56813C181.488 3.62139 181.57 3.67464 181.736 3.7279ZM172.149 2.18352C171.901 2.07701 171.405 2.02375 170.992 2.02375C171.157 2.02375 171.488 2.13026 172.149 2.18352ZM111.901 4.79299C112.231 4.79299 112.727 4.79299 112.314 4.63322C112.066 4.68648 111.653 4.4202 111.405 4.52671C111.405 4.52671 111.405 4.52671 111.322 4.52671C111.653 4.68648 111.818 4.79299 111.901 4.79299ZM83.5537 4.3137C83.5537 4.20719 83.719 4.04742 83.5537 3.99417H83.6364C83.5537 3.99417 83.4711 3.94091 83.5537 3.94091C83.3058 3.94091 83.0578 3.99417 82.8926 4.04742C82.8926 4.3137 82.4793 4.47346 83.5537 4.3137Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M92.7273 1.7041C92.6446 1.7041 92.4794 1.7041 92.4794 1.75736C92.562 1.75736 92.6446 1.75736 92.7273 1.7041Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M82.8926 3.99404C82.8926 3.99404 83.1405 3.99404 83.4711 3.99404C83.4711 3.94079 83.3058 3.94079 82.8926 3.99404Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M201.818 7.40226H201.488L202.066 7.50877C203.058 7.45551 203.14 7.29575 203.388 7.13599C202.479 7.2425 201.983 7.18924 200.909 7.13599C201.24 7.29575 201.488 7.349 201.818 7.40226Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M201.488 6.2306C201.405 6.17734 201.157 6.07083 201.074 6.01758L200.909 6.12409C201.074 6.17734 201.322 6.2306 201.488 6.2306Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M190.744 4.47327L191.57 4.68629C191.901 4.63304 190.909 4.31351 190.744 4.47327Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M194.05 6.81649L194.545 6.76324C194.132 6.60348 193.554 6.55022 193.471 6.65673C193.967 6.65673 193.554 6.70999 194.05 6.81649Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M188.347 4.04736C188.016 4.20712 187.521 3.83434 187.273 3.9941C187.521 3.94085 188.264 4.26038 188.347 4.04736Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M188.264 6.07106C188.43 6.28408 189.008 6.23083 189.504 6.33734C189.091 6.23083 188.512 5.96456 188.264 6.07106Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M183.471 3.83445C183.554 3.67469 183.967 3.7812 184.38 3.88771C184.215 3.88771 184.132 3.94096 183.884 3.94096C184.628 3.94096 184.628 3.99421 185.207 3.99421C184.711 3.7812 183.884 3.62143 184.05 3.46167C183.554 3.51492 182.975 3.62143 183.471 3.83445Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M186.859 5.85789C187.273 5.9644 187.521 6.17742 188.099 6.23067C188.017 6.12416 187.934 5.9644 187.273 5.85789L187.603 5.75138C187.025 5.53836 187.769 6.01765 186.859 5.85789Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M180.992 3.03554L181.24 3.14205C181.983 3.08879 182.727 3.30181 183.223 3.14205C182.479 3.03554 181.405 2.98229 180.992 3.03554Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M184.711 5.16577L184.545 5.37879C185.207 5.53855 184.545 5.27228 184.793 5.27228C184.959 5.32553 185.207 5.37879 185.372 5.37879C184.628 5.32554 185.455 5.21903 184.711 5.16577Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M182.562 5.05911L181.736 5.00586L182.314 5.37864C183.223 5.48515 182.314 5.27213 182.562 5.05911Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M181.57 4.73978L181.488 4.68652L180.083 4.84629C180.909 4.79303 180.909 4.84629 181.57 4.73978Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M166.446 1.65082C166.281 1.75733 167.107 1.86384 166.777 1.75733C166.859 1.70407 165.868 1.54431 166.446 1.65082Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M169.339 3.67448C169.008 3.56797 167.851 3.67448 167.273 3.72773C167.934 3.72773 169.421 3.83424 169.339 3.67448Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M167.107 3.78104C167.19 3.78104 167.19 3.78104 167.355 3.72778C167.273 3.72778 167.19 3.72778 167.107 3.78104Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M146.28 6.70996C146.198 6.70996 146.198 6.76322 146.116 6.76322C146.198 6.76322 146.198 6.76322 146.28 6.70996Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M146.694 6.60349C147.025 6.55024 147.686 6.39048 147.769 6.23071C147.273 6.39048 146.777 6.49698 146.198 6.71C146.446 6.65675 146.777 6.71 146.694 6.60349Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M141.818 7.45562C142.066 7.34912 142.397 7.29586 142.314 7.24261C142.066 7.18935 141.57 7.40237 141.818 7.45562Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M108.43 3.24848C108.017 3.08872 107.686 3.08872 107.769 3.24848C108.264 3.35499 108.017 3.24848 108.43 3.24848Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M107.107 3.19523V3.08872L106.859 2.92896L107.107 3.19523Z" fill="<?= the_field('color') ?>"/>
                    <path d="M103.967 2.34316C103.967 2.34316 104.132 2.28991 104.215 2.34316C103.967 2.28991 103.802 2.28991 103.967 2.34316Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M104.463 2.39636L104.545 2.3431C104.463 2.3431 104.38 2.3431 104.297 2.3431C104.38 2.28985 104.463 2.3431 104.463 2.39636Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M102.975 2.13016L103.554 2.44969C104.298 2.44969 102.81 2.18341 103.636 2.0769L102.975 2.13016Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M100.661 1.81052C100 1.65075 99.0083 1.86377 98.6777 1.5975C96.7769 1.54424 99.0083 2.07679 96.8595 2.02353C97.8512 2.13004 98.0992 2.07679 98.3471 1.97028C98.595 1.86377 98.843 1.75726 99.6694 1.91703C98.9256 1.5975 100.331 1.81052 100.661 1.81052Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M100.826 2.28986C100.992 2.18335 100.165 2.02359 99.9174 2.1301C100.083 2.18335 100.413 2.39637 100.826 2.28986Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M97.0248 1.54428L96.4463 1.38452L96.281 1.49103L97.0248 1.54428Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M94.7934 1.43784C94.9587 1.38458 95.2066 1.33133 95.3719 1.27808C95.2066 1.33133 94.2975 1.33133 94.7934 1.43784Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M91.7355 1.38452C91.2396 1.38452 90.8264 1.7573 91.9008 1.59754H91.6529C91.6529 1.54428 91.0743 1.43778 91.7355 1.38452Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M85.2893 2.71595C85.6198 2.66269 86.0331 2.55618 85.8678 2.50293L84.9587 2.71595H85.2893Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M85.7025 3.56797C86.1157 3.72773 86.5289 3.4082 87.19 3.4082C86.4463 3.46146 86.5289 3.4082 85.7025 3.56797Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M84.1322 2.55622C84.3801 2.44971 84.7107 2.44971 84.9587 2.39645C84.7934 2.28994 84.1322 2.44971 84.1322 2.55622Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M82.6446 2.87577C82.314 2.82252 82.6446 2.76927 82.3967 2.71601C81.7355 2.71601 81.0744 2.87577 80.7438 3.03554C80.9091 3.08879 81.2396 3.30181 81.0744 3.46157C82.0661 3.1953 82.3967 2.71601 82.9752 2.92903L83.6363 2.39648C82.9752 2.50299 83.2231 2.82252 82.6446 2.87577Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M84.9587 3.24857L84.3801 3.19531C84.5454 3.30182 84.1322 3.40833 83.8843 3.46159C84.1322 3.72786 84.7107 3.30182 84.9587 3.24857Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M77.1901 4.04736L76.1157 4.31364L76.5289 4.26038L77.1901 4.04736Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M76.4463 4.0474V3.99414L75.6198 4.31367L76.4463 4.0474Z" fill="<?= the_field('color') ?>"/>
                    <path d="M75.2892 4.20716L75.3719 4.1539L76.0331 3.99414L75.2892 4.20716Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M72.8926 4.52671L73.1405 4.57996C73.3885 4.52671 74.0496 4.52671 73.8843 4.36694C73.719 4.52671 73.1405 4.63322 72.8926 4.52671Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M66.0331 8.62708C66.1984 8.52057 66.1157 8.46732 65.9505 8.41406L65.6199 8.62708C65.7025 8.62708 65.9505 8.57383 66.0331 8.62708Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M64.4628 8.4141C64.2149 8.52061 63.8843 8.62711 63.6364 8.73362C64.7107 8.68037 64.7934 8.46735 65.7025 8.36084C65.2892 8.30759 64.7934 8.52061 64.2975 8.52061L64.4628 8.4141Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M46.6942 6.97643C46.8595 6.86992 46.6116 6.81666 47.2727 6.86992C46.3637 6.81666 45.6198 6.60364 44.7108 6.39062C44.7934 6.49713 44.0496 6.49713 44.3802 6.55039L45.5372 6.71015L45.2893 6.76341C46.0331 7.02968 45.8678 6.71015 46.6942 6.97643Z"
                          fill="<?= the_field('color') ?>"/>
                    <path d="M3.88431 5.05915C3.88431 4.95264 3.71902 4.95264 3.55373 4.95264C3.05787 5.27216 3.96696 4.95264 3.88431 5.05915Z"
                          fill="<?= the_field('color') ?>"/>
                </g>
                <defs>
                    <clipPath id="clip1">
                        <rect width="210" height="9" fill="white"/>
                    </clipPath>
                </defs>
            </svg>

        </div>
    <?php  } ?>
</div>

<style>
    .separator-container .image-container {
        margin-top : -8%;
    }
</style>