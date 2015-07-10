<?php
/************************************************************************************************************************************
 * This page is for including any custom error messages you'd like to throw with the ErrorHandler::handle( #### ) class/method.
 * OrionMVC comes with several below (some are examples, some are actually used). All are customizable.
 ***********************************************************************************************************************************/
    [
/** Block 1x - MySQL-Related Errors and Issues */
        1001 => "Cannot connect to MySQL using the database access credentials provided.",
        1002 => "Query returned zero results.",

/** Block 2x - Logical Errors ******************************************************************************************************/
        2001 => "A required parameter is missing.",
        2002 => "There was an issue while processing your answer.",
        2003 => "There was an issue while processing your question.",
        2004 => "There was an issue while updating your profile information.",
        2005 => "The specified route is invalid. Check your routing syntax and routing table.",
        2006 => "This page's title attribute is missing a value.",

/** Block 3x - ??? *****************************************************************************************************************/
        3001 => "Put your error",
        3002 => "messages here",
        3003 => "Etc",

/** Block 4x - Resource-Related Errors *********************************************************************************************/
        4001 => "",
        4002 => "Invalid or missing language file selector. Be sure to use the two-letter language abbreviation.",
        4003 => "Resource found but could not be loaded. Try again. If the issue persists, contact us.",
        4004 => "This page or resource does not exist. Perhaps it moved? Check your url and try again or contact us if you believe
                this page or resource should be here.",

/** Block 5x - Credential Errors ***************************************************************************************************/
        5001 => "The given username or password is incorrect.",
        5002 => "Your password should be at least 8 characters in length.",
        5003 => "Your password must consist of at least 3 of the following: Uppercase Letters, Lowercase Letters, Numbers, Special
                Characters.",
        5004 => "That user handle is already taken. Please select another one or login if it is yours.",
        5005 => "That email address is already associated with a previous registration. Please login.",
        5006 => "You have accumulated too many failed login attempts. Please wait 10 minutes before trying again.",
        5007 => "Due to so many accumulated failed login attempts, this account has been temporarily suspended. Reset your password
                or contact us to regain access.",
        5008 => "Due to suspicious activity with respect to this account, it has been temporarily suspended. Reset your password or
                contact us to regain access.",
        5009 => "The given email addresses do not match.",
        5010 => "The given passwords do not match.",
        5011 => "This IP address has been banned. For further information, please contact us.",
        5012 => "The given email address is not valid.",
        5013 => "The given email address contains illegal characters. Only @#$%^&*()-_+=<>,./?[]{ and } are valid special characters."
    ];