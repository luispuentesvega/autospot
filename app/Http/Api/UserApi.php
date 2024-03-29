<?php

/**
 * @SWG\Get(
 *   path="/customer/{customerId}/rate",
 *   summary="List customer rates",
 *   operationId="getCustomerRates",
 *   @SWG\Parameter(
 *     name="customerId",
 *     in="path",
 *     description="Target customer.",
 *     required=true,
 *     type="integer"
 *   ),
 *   @SWG\Parameter(
 *     name="filter",
 *     in="query",
 *     description="Filter results based on query string value.",
 *     required=false,
 *     enum={"active", "expired", "scheduled"},
 *     type="string"
 *   ),
 *   @SWG\Response(response=200, description="successful operation"),
 *   @SWG\Response(response=406, description="not acceptable"),
 *   @SWG\Response(response=500, description="internal server error")
 * )
 *
 */

/**
 * @SWG\Post(
 *   path="/customer/{customerId}/rate",
 *   summary="List customer rates",
 *   operationId="saveCustomers",
 *   @SWG\Parameter(
 *     name="customerId",
 *     in="path",
 *     description="Target customer.",
 *     required=true,
 *     type="integer"
 *   ),
 *   @SWG\Parameter(
 *     name="filter",
 *     in="query",
 *     description="Filter results based on query string value.",
 *     required=false,
 *     enum={"active", "expired", "scheduled"},
 *     type="string"
 *   ),
 *   @SWG\Response(response=200, description="successful operation"),
 *   @SWG\Response(response=406, description="not acceptable"),
 *   @SWG\Response(response=500, description="internal server error")
 * )
 *
 */