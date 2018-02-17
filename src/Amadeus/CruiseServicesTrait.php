<?php

namespace Amadeus;


use Amadeus\Client\Exception;
use Amadeus\Client\RequestOptions\Cruise\CancelBookingOptions;
use Amadeus\Client\RequestOptions\Cruise\CreateBookingOptions;
use Amadeus\Client\RequestOptions\Cruise\DisplayCabinDescriptionOptions;
use Amadeus\Client\RequestOptions\Cruise\DisplayItineraryDescriptionOptions;
use Amadeus\Client\RequestOptions\Cruise\GetBookingDetailsOptions;
use Amadeus\Client\RequestOptions\Cruise\HoldCabinOptions;
use Amadeus\Client\RequestOptions\Cruise\ModifyBookingOptions;
use Amadeus\Client\RequestOptions\Cruise\PriceBookingCancellationOptions;
use Amadeus\Client\RequestOptions\Cruise\PriceBookingOptions;
use Amadeus\Client\RequestOptions\Cruise\RequestCabinAvailabilityOptions;
use Amadeus\Client\RequestOptions\Cruise\RequestCategoryAvailabilityOptions;
use Amadeus\Client\RequestOptions\Cruise\RequestSailingAvailabilityOptions;
use Amadeus\Client\RequestOptions\Cruise\RequestFareAvailabilityOptions;
use Amadeus\Client\RequestOptions\Cruise\UnholdCabinOptions;
use Amadeus\Client\Result;

trait CruiseServicesTrait
{
    /**
     * Cruise_RequestSailingAvailability - get sailings
     *
     * @param RequestSailingAvailabilityOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function requestSailingAvailability(RequestSailingAvailabilityOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_RequestSailingAvailability', $options, $messageOptions);
    }

    /**
     * Cruise_RequestFareAvailability - get sailing fares
     *
     * @param RequestFareAvailabilityOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function requestFareAvailability(RequestFareAvailabilityOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_RequestFareAvailability', $options, $messageOptions);
    }

    /**
     * Cruise_RequestCategoryAvailability - get fare categories
     *
     * @param RequestCategoryAvailabilityOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function requestCategoryAvailability(RequestCategoryAvailabilityOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_RequestCategoryAvailability', $options, $messageOptions);
    }

    /**
     * Cruise_DisplayItineraryDescription - get sailing details
     *
     * @param DisplayItineraryDescriptionOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function displayItineraryDescription(DisplayItineraryDescriptionOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_DisplayItineraryDescription', $options, $messageOptions);
    }

    /**
     * @param RequestCabinAvailabilityOptions $options
     * @param array $messageOptions
     * @return mixed
     * @throws Client\InvalidMessageException
     * @throws Client\RequestCreator\MessageVersionUnsupportedException
     * @throws Exception
     */
    public function requestCabinAvailability(RequestCabinAvailabilityOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_RequestCabinAvailability', $options, $messageOptions);
    }

    /**
     * Cruise_DisplayCabinDescription - get sailing details
     *
     * @param DisplayCabinDescriptionOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function displayCabinDescription(DisplayCabinDescriptionOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_DisplayCabinDescription', $options, $messageOptions);
    }

    /**
     * Cruise_HoldCabin - hold cabin and hide it from the displayCabinDescription results
     *
     * @param HoldCabinOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function holdCabin(HoldCabinOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_HoldCabin', $options, $messageOptions);
    }

    /**
     * Cruise_UnholdCabin - release the holded cabin
     *
     * @param UnholdCabinOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function unholdCabin(UnholdCabinOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_UnholdCabin', $options, $messageOptions);
    }

    /**
     * Cruise_PriceBooking - get booking prices for the cabin
     *
     * @param PriceBookingOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function priceBooking(PriceBookingOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_PriceBooking', $options, $messageOptions);
    }

    /**
     * Cruise_CreateBooking - create a cruise booking in both the Cruise Line system inventory and the Amadeus central system
     *
     * @param CreateBookingOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function createBooking(CreateBookingOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_CreateBooking', $options, $messageOptions);
    }

    /**
     * Cruise_GetBookingDetails - This service gets the details of a booking from a cruise line.
     * All of the information stored by the cruise line is returned, whether or not the information may be modified.
     *
     * @param GetBookingDetailsOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function getBookingDetails(GetBookingDetailsOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_GetBookingDetails', $options, $messageOptions);
    }

    /**
     * Cruise_ModifyBooking - used to modify a cruise booking in both the Cruise Line system inventory and the Amadeus Central System.
     *
     * @param ModifyBookingOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function modifyBooking(ModifyBookingOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_ModifyBooking', $options, $messageOptions);
    }

    /**
     * Cruise_CancelBooking - used to cancel a cruise booking in a cruise line’s system and in the Amadeus Central System.
     *
     * @param CancelBookingOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function cancelBooking(CancelBookingOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_CancelBooking', $options, $messageOptions);
    }

    /**
     * Cruise_PriceBookingCancellation - The customer wishes to get a pricing for the cancellation of the booking and check possible cancellation fees.
     *
     * @param PriceBookingCancellationOptions $options
     * @param array [$messageOptions]
     * @return Result
     * @throws Exception
     */
    public function priceBookingCancellation(PriceBookingCancellationOptions $options, $messageOptions = [])
    {
        return $this->callMessage('Cruise_PriceBookingCancellation', $options, $messageOptions);
    }
}