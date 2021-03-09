<?php

namespace Softx\Sortiment;

/**
 * Frontend handler class
 */
class Frontend {

    /**
     * Initialize the class
     */
    function __construct() {
        new Frontend\Shortcode();
        new Frontend\RegisterShortcode();
        new Frontend\LoginShortcode();
        new Frontend\DashboardShortcode();
        new Frontend\DashboardOrderProductsShortcode();
        new Frontend\DashboardOrderProductsSingleShortcode();
        new Frontend\DashboardMyProductDenyComment();
        new Frontend\DashboardMyProductsShortcode();
        new Frontend\DashboardMyProductsSingleShortcode();
        new Frontend\DashboardMyProductsCartShortcode();
        new Frontend\DashboardMyProductsCheckoutShortcode();
        new Frontend\DashboardCompanyInformationShortcode();
        new Frontend\DashboardYourEmployeesShortcode();
        new Frontend\DashboardYourEmployeesOrderShortcode();
        new Frontend\DashboardOrderHistoryShortcode();
        new Frontend\DashboardOrderStatusShortcode();
        new Frontend\DashboardOrderStatusStep2Shortcode();
        new Frontend\DashboardOrderStatusStep3Shortcode();
        new Frontend\DashboardOrderStatusStep4Shortcode();
        new Frontend\DashboardAskAQuestionShortcode();

        //new Frontend\DashboardCompanyUpdate();
        
        

    }


}