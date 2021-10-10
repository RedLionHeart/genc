<div class="d-flex flex-column box-search-filters">

<form class="form-search" method="get" action="<?php echo home_url( '/' ); ?>">
    <label>
        <div class="box-search">
            <input class="h5 input-search-focus" id="search" type="search" value="" name="s" placeholder="Поиск товара" minlength="2">
            <button type="submit">
                <div class="d-flex align-items-center">
                    <p class="h4">Найти!</p>
                    <div class="img-search d-flex align-items-center justify-content-center">
                        <svg width="27" height="26" viewBox="0 0 27 26" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.6562 24.9726L20.0623 19.3687L25.6562 24.9726ZM23.1623 11.8795C23.1623 14.6905 22.0456 17.3865 20.0578 19.3742C18.0701 21.362 15.3741 22.4787 12.5631 22.4787C9.75198 22.4787 7.05603 21.362 5.0683 19.3742C3.08056 17.3865 1.96387 14.6905 1.96387 11.8795C1.96387 9.06838 3.08056 6.37244 5.0683 4.3847C7.05603 2.39697 9.75198 1.28027 12.5631 1.28027C15.3741 1.28027 18.0701 2.39697 20.0578 4.3847C22.0456 6.37244 23.1623 9.06838 23.1623 11.8795V11.8795Z"
                                  stroke="#5C87AF" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
            </button>
        </div>
        <div class="box-search-result"></div>
    </label>
</form>
    <div class="d-flex align-items-center justify-content-center button-filter-mob button-blue" data-bs-toggle="modal" data-bs-target="#formModalfilters">
        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.49979 7.99905V14.1271C8.52979 14.3604 8.4548 14.6093 8.28232 14.7726C8.21295 14.8447 8.13054 14.9019 8.03982 14.9409C7.94911 14.9799 7.85186 15 7.75365 15C7.65543 15 7.55818 14.9799 7.46747 14.9409C7.37675 14.9019 7.29434 14.8447 7.22497 14.7726L5.71768 13.2095C5.63589 13.1265 5.5737 13.0251 5.53598 12.9132C5.49825 12.8012 5.48601 12.6817 5.50021 12.564V7.99905H5.47771L1.15831 2.25983C1.03653 2.09771 0.981584 1.89219 1.00547 1.68819C1.02936 1.48418 1.13014 1.29827 1.28579 1.17109C1.42827 1.06221 1.58575 1 1.75073 1H12.2493C12.4142 1 12.5717 1.06221 12.7142 1.17109C12.8699 1.29827 12.9706 1.48418 12.9945 1.68819C13.0184 1.89219 12.9635 2.09771 12.8417 2.25983L8.52229 7.99905H8.49979Z" stroke="#EBEFF2" stroke-opacity="0.9"/>
        </svg>
        <p>Фильтр</p>
    </div>
</div>
