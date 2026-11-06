<?php

declare(strict_types=1);

namespace Piloterr;

// Generated from the Piloterr OpenAPI document. Do not edit by hand.

/**
 * One method per documented Piloterr endpoint. Used by {@see Client}.
 */
trait Operations
{
    /**
     * @param array<string, mixed> $params
     */
    abstract protected function callOperation(string $name, array $params, ?RequestOptions $options): JsonResponse|BinaryResponse;

    /**
     * About You Product. Read one About You product from a product URL or a keyword. A keyword opens the first search hit. Set region when the query does not already name the shop. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/aboutyou/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL or keyword. A keyword opens the first search result.
     *   - region: Shop code. Default is fr. A full link in query picks the shop, and a conflicting region returns 400.
     *   - return_page_source: Return the rendered HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function aboutyouProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('aboutyou_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * About You Search. Search an About You shop with a keyword or a search URL. Pick the country with region, or let a full link choose the shop. Cards include brand, price, and the product link. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/aboutyou/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or About You search, category, or brand URL.
     *   - region: Shop code. Default is fr. A full link in query picks the shop, and a conflicting region returns 400.
     *   - page: Only page 1 is available.
     *   - return_page_source: Return the rendered HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function aboutyouSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('aboutyou_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Action Product. Action Product API: fetch full product page data from a product ID or URL on Action.com. Returns pricing, specs, images, breadcrumbs and availability via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/action/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Action product ID or full product URL.
     *   - region: Locale (fr-fr, de-de, pt-pt, …) or country code (fr, de, pt). Default: fr-fr.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function actionProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('action_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Action Search. Action Search API: search product listings by keyword or URL on Action.com across European locales. Returns prices, images, locale, currency and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/action/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full Action.com search URL.
     *   - region: Locale (fr-fr, de-de, pt-pt, …) or country code (fr, de, pt). Default: fr-fr.
     *   - page: 1-based page number (default: 1).
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function actionSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('action_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Aldi Product. Aldi Product API: fetch full product page data from an Aldi URL or path slug. Returns pricing, images, description, category and cooling flags. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/aldi/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Aldi product page URL or site path slug.
     *   - region: Target country when query is a path only (default: fr). Ignored for full product URLs.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function aldiProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('aldi_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Aldi Search. Aldi Search API: list products from an Aldi category page URL or path across FR, DE, NL and Canarias shops. Returns prices, thumbnails and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/aldi/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Aldi category page URL or site path.
     *   - region: Target country when query is a path only (default: fr).
     *   - page: 1-based page number override (default: read from URL or 1).
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function aldiSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('aldi_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Alibaba Product. Alibaba Product API. Fetch a full B2B product page by URL or product ID with optional locale subdomain. Browser rendering returns tiered pricing, seller profile and lead times. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/alibaba/product`
     *
     * @param array{query: string, subdomain?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Alibaba product URL or numeric product ID.
     *   - subdomain: Locale subdomain when query is a bare product ID, or to override the host on a product URL.
     *   - return_page_source: When true, return the rendered HTML as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function alibabaProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('alibaba_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Alibaba Search. Alibaba Search API. Query B2B product listings by keyword or search URL across 17 locale subdomains. Request mode returns prices, MOQ, seller data and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/alibaba/search`
     *
     * @param array{query: string, subdomain?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full Alibaba search URL.
     *   - subdomain: Locale subdomain for keyword searches when query is not a full URL.
     *   - page: 1-based page number (20 results per page). Default: 1.
     *   - return_page_source: When true, return the raw open-s JSON as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function alibabaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('alibaba_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * AliExpress Product. AliExpress Product API: scrape live /item/ product pages from a full URL. Get title, images, seller identity, pricing, specs, delivery, and FAQs as JSON via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/aliexpress/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full AliExpress product page URL (/item/{id}.html).
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of parsed JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function aliexpressProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('aliexpress_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * AliExpress Reviews. AliExpress Reviews API: list buyer reviews for a product id or item URL. Each review includes author, star rating, text, date, and photos when the buyer attached them. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/aliexpress/product/reviews`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): AliExpress product id or item URL.
     *   - page: Page number, starting at 1. Defaults to 1. The feed returns up to 20 reviews per page. pagination.next is the next page URL, or null on the last page.
     *   - return_page_source: When true, return the raw feed body as {"result": "..."} instead of parsed JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function aliexpressProductReviews(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('aliexpress_product_reviews', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * AliExpress Search. AliExpress Search API: search by keyword or wholesale URL and get product listings with prices, ratings, sold counts, and pagination as JSON via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/aliexpress/search`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full AliExpress search results URL.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function aliexpressSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('aliexpress_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * AliExpress Store Product. AliExpress Store Product API: list products from an AliExpress seller store by URL or store ID. Returns store metadata and product cards (~40 SSR items) as JSON via browser rendering. Pagination is not supported. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/aliexpress/store/product`
     *
     * @param array{query: string, sort?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): AliExpress store URL or numeric store ID.
     *   - sort: Optional sort alias for the store all-items page.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function aliexpressStoreProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('aliexpress_store_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Allegro Product. Allegro Product API. Extract full product page data from allegro.pl by URL (/produkt/, /oferta/, /ogloszenie/). Browser rendering, 3 credits per call. Pair with Allegro Search (3 credits) for listing discovery. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/allegro/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full allegro.pl product or offer URL to extract structured PDP data.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function allegroProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('allegro_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Allegro Search. Allegro Search API. Query product listings by keyword, optional page number, or full allegro.pl listing URL. Returns results with prices, sellers, sponsorship flags and pagination. 3 credits per call. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/allegro/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full Allegro listing URL.
     *   - page: Page number for keyword searches (default 1).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function allegroSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('allegro_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Amazon Product. Efficiently extract product details from Amazon for dynamic retail insights, including price, stock, features, and seller data. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/amazon/product`
     *
     * @param array{query: string, domain?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Amazon product ASIN (Amazon Standard Identification Number) to retrieve full product details for.
     *   - domain: Amazon domain extension to query. Controls which Amazon marketplace is targeted.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function amazonProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('amazon_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Amazon Product Offer. Efficiently extract details of third-party seller offers for any Amazon product across multiple marketplaces. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/amazon/product/offer`
     *
     * @param array{query: string, domain?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Amazon product ASIN (Amazon Standard Identification Number) to retrieve third-party seller offers for.
     *   - domain: Amazon domain extension to query. Controls which Amazon marketplace is targeted.
     *   - page: Page number for paginated offer results.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function amazonProductOffer(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('amazon_product_offer', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Amazon Search. Efficiently scrape Amazon search results for real-time product data and insights across multiple Amazon marketplaces. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/amazon/search`
     *
     * @param array{query: string, domain?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or phrase to search for products on Amazon.
     *   - domain: Amazon domain extension to query. Controls which Amazon marketplace is searched.
     *   - page: Page number for paginated search results. Each page returns up to 60 results.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function amazonSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('amazon_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Apartments Property. Extract a full Apartments.com rental listing from a property URL, including amenities, gallery, description, geolocation, and unit details via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/apartments/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Apartments.com property listing URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function apartmentsProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('apartments_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Apartments Search. Search Apartments.com rentals from a full city or browse URL and retrieve prices, photos, addresses, phone numbers, and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/apartments/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Apartments.com search or city browse URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function apartmentsSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('apartments_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Argenprop Property. Read one Argenprop listing from its URL or id. You get price, address, rooms, expenses, and the agent when the page shows them. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/argenprop/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The full listing page on argenprop.com. Copy it from results[].url on [Argenprop Search](https://www.piloterr.com/library/argenprop-search). The listing id is…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function argenpropProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('argenprop_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Argenprop Search. Search Argenprop by neighbourhood or city. Set operation to venta or alquiler, and property_type such as departamentos or casas. Page with pagina. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/argenprop/search`
     *
     * @param array{query: string, page?: int|float, operation?: string, property_type?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The place to search, or a full Argenprop results page.
     *   - page: Which page of the list to open. The first page is 1. The placeholder is 2.
     *   - operation: Sale or rent, when query is a place name. The placeholder is venta, which means for sale. alquiler is a long-term rental. alquiler-temporal is a short stay. sa…
     *   - property_type: The kind of home, when query is a place name. The placeholder is departamentos, which means apartments. Also accepted: casas (houses), ph, terrenos, locales, o…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function argenpropSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('argenprop_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Argos Product. Argos Product API: one UK product by id or URL. Browser rendering (2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/argos/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Argos product id or product URL.
     *   - return_page_source: When true, return raw HTML.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function argosProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('argos_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Argos Search. Search the Argos UK catalogue by keyword and page the results. Prices are in pounds. A one-word query that Argos turns into a brand page with no product cards returns no results. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/argos/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or Argos UK search URL.
     *   - page: Page number from 1.
     *   - return_page_source: When true, return raw HTML as {"result": "..."}.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function argosSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('argos_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * arXiv Paper. Fetch one arXiv paper by id or by an abs, pdf, or html URL. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/arxiv/paper`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. arXiv id or an abs, pdf, or html URL. Example: 2201.00978 or https://arxiv.org/abs/cond-mat/0011267v1.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function arxivPaper(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('arxiv_paper', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * arXiv Search. Search arXiv papers by keyword, author query such as au:einstein, or arXiv id. A paper URL returns 400. Page through results when the match count is large. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/arxiv/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Keyword, fielded query such as au:einstein, arXiv id, or an arxiv.org search URL. Example: electron. A paper URL such as https://arxiv.org/abs/2201.0…
     *   - page: Optional. Page number from 1. Example: 2. Defaults to 1. Each page has 10 papers.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function arxivSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('arxiv_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Auchan Product. Effortlessly extract product details from Auchan for dynamic business insights, including nutritional information, ingredients, ratings, and reviews. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/auchan/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): URL of the Auchan product page to extract data from.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function auchanProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('auchan_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Auchan Search. Extract Auchan product listings from keyword searches for insightful market analysis and competitive edge. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/auchan/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or Auchan search URL to retrieve product listings.
     *   - page: Page number for paginated search results.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function auchanSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('auchan_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Autodoc Product. Scrape Autodoc product pages: price, specs, EAN, images, compatibility, and TecDoc-related vehicle data via the Related endpoint. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/autodoc/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): HTTPS URL of an Autodoc product page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function autodocProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('autodoc_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Autodoc Product Related. Vehicle fitment lines per maker for an Autodoc product. All parameters from Product fetch.params are required. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/autodoc/product/related`
     *
     * @param array{query: string, maker_id: int|float, vehicle_type: string, maker_name: string, product_id: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Same HTTPS product page URL as Product.
     *   - maker_id (required): TecDoc maker id from compatibility.cars[] / compatibility.trucks[], e.g. 93 for RENAULT.
     *   - vehicle_type (required): Required. pkw (passenger cars) or lkw (commercial). Must match the compatibility row.
     *   - maker_name (required): Required maker label from compatibility, e.g. RENAULT. Used to parse vehicle lines.
     *   - product_id (required): Required article id from Product response or URL path, e.g. 7999541.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function autodocProductRelated(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('autodoc_product_related', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Autodoc Search. Search Autodoc by URL: keyword pages use /search?keyword=… (e.g. frein on auto-doc.fr). Extract product cards, prices, and pagination. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/autodoc/search`
     *
     * @param array{query: string, domain?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Autodoc search/listing URL, or path only when domain sets the shop.
     *   - domain: Regional shop hostname without https:// or www. (e.g. auto-doc.fr, autodoc.de). Omit to default to autodoc.de.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function autodocSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('autodoc_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Auto Europe Result. Read one vehicle from an Auto Europe quote. Pass the offer id from Search, with the same pickup and dates. You get the supplier, the SIPP code, and the package prices. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/autoeurope/result`
     *
     * @param array{offer_id: string, pickup: string, pickup_date: string, dropoff_date: string, region?: string, dropoff?: string, pickup_time?: string, dropoff_time?: string, driver_age?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - offer_id (required): Vehicle id from search results[].id, or a package id of that vehicle.
     *   - pickup (required): Same pickup place as the search. Example: CDG
     *   - pickup_date (required): Same pickup date as the search, YYYY-MM-DD. Example: 2026-11-06
     *   - dropoff_date (required): Same return date as the search, YYYY-MM-DD, after pickup_date. Example: 2026-11-09
     *   - region: Country site used for the search. Default fr. Example: fr. There is no page parameter.
     *   - dropoff: Return place when it differs from pickup.
     *   - pickup_time: Pickup time HH:MM. Default 10:00.
     *   - dropoff_time: Return time HH:MM. Default 10:00.
     *   - driver_age: Driver age from 18 to 99. Default 40.
     *   - return_page_source: When true, return the raw quote HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function autoeuropeResult(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('autoeurope_result', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Auto Europe Search. Quote a rental car on Auto Europe. Pass pickup, pickup date, and dropoff date. Region chooses the country site and its currency. The whole quote comes back on one page. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/autoeurope/search`
     *
     * @param array{pickup: string, pickup_date: string, dropoff_date: string, region?: string, dropoff?: string, pickup_time?: string, dropoff_time?: string, driver_age?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - pickup (required): Pickup place or airport code.
     *   - pickup_date (required): Pickup date, YYYY-MM-DD.
     *   - dropoff_date (required): Return date, YYYY-MM-DD, after pickup_date.
     *   - region: Country site. Default fr. Example: fr. A code such as de or uk, or a full Auto Europe URL. There is no page parameter.
     *   - dropoff: Return place when it differs from pickup.
     *   - pickup_time: Pickup time HH:MM. Default 10:00.
     *   - dropoff_time: Return time HH:MM. Default 10:00.
     *   - driver_age: Driver age from 18 to 99. Default 40.
     *   - return_page_source: When true, return the raw quote HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function autoeuropeSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('autoeurope_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * AutoScout24 Ad. Read one AutoScout24 listing, including an inactive ad that still exposes the listing. Price, vehicle, seller, and location. (1 credit) Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/autoscout24/ad`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full AutoScout24 listing URL. An inactive listing that still contains script#__NEXT_DATA__ is returned with status Inactive. A page without that selector retur…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function autoscout24Ad(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('autoscout24_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * AutoScout24 Search. Search AutoScout24 listings from a search URL. Each card has make, model, numeric price, mileage, and the listing URL. (1 credit) Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/autoscout24/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full AutoScout24 search URL. Filters and page in the URL are kept. page starts at 1. A page with no cards returns 404.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function autoscout24Search(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('autoscout24_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Autotrader Ad. Extract full vehicle details from an AutoTrader UK car-details URL, including price, specs, gallery, seller, and description via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/autotrader/ad`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full AutoTrader UK car details URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function autotraderAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('autotrader_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Autotrader Search. Search AutoTrader UK listings from a car-search URL and retrieve prices, specs, photos, seller info, and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/autotrader/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full AutoTrader UK car search URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function autotraderSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('autotrader_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Best Buy Product. Get a Best Buy US or Canada product page: title, price, brand, stock, images, categories and specs via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/bestbuy/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Best Buy product URL.
     *   - return_page_source: When true, return rendered HTML as {"result": "..."} instead of JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bestbuyProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bestbuy_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Best Buy Reviews. Get customer reviews for a Best Buy product URL: rating, review text, author, photos and pagination. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/bestbuy/product/reviews`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Best Buy product URL or reviews URL.
     *   - page: Page number, starting at 1. Default 1. A value above 1 overrides page on the Best Buy URL. If this stays at 1, a page already on the URL is kept.
     *   - return_page_source: When true, return the rendered HTML instead of JSON. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bestbuyProductReviews(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bestbuy_product_reviews', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Best Buy Search. Search Best Buy US or Canada by keyword or search URL. Returns product listings with price, rating and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/bestbuy/search`
     *
     * @param array{query: string, region?: string, page?: int|float, sort?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or full Best Buy search URL.
     *   - region: Best Buy country when query is not a full URL (default: com).
     *   - page: Page number (default: 1).
     *   - sort: Sort order (default: best_selling).
     *   - return_page_source: When true, return rendered HTML as {"result": "..."} instead of JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bestbuySearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bestbuy_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * B&H Photo Video Product. Read a B&H Photo Video product from its URL or id. Returns price, rating, specifications, and box contents. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/bhphotovideo/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL or id.
     *   - return_page_source: When true, return the raw HTML. The string false stays false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bhphotovideoProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bhphotovideo_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * B&H Photo Video Search. Search B&H Photo Video by keyword or search URL. Returns BH numbers, dollar prices, and a next page URL. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/bhphotovideo/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or a bhphotovideo.com search URL.
     *   - page: Page number, starting at 1. Example: 2.
     *   - return_page_source: When true, return the raw HTML. The string false stays false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bhphotovideoSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bhphotovideo_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Bing Search. Scrape real-time Bing search results with full control over location, language, and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/bing/search`
     *
     * @param array{query: string, page?: int|float, num?: int|float, location?: string, lat?: int|float, lon?: int|float, mkt?: string, cc?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The search query to execute on Bing. Supports all Bing advanced search operators.
     *   - page: Page number of results to retrieve. Used for pagination.
     *   - num: Number of results per page. Minimum: 10, Maximum: 50.
     *   - location: City or region from which the search should originate. If multiple locations match, the most popular one is selected.
     *   - lat: GPS latitude coordinate for the search origin.
     *   - lon: GPS longitude coordinate for the search origin.
     *   - mkt: Market code combining language and country, in the form <language>-<country>. Defines where the results come from.
     *   - cc: Two-letter ISO 3166-1 country code defining the country to search from.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bingSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bing_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Bitiba Product. Read one product from a live Bitiba shop, including the selected variant price and the pack list. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/bitiba/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL, shop path, or product number. Example: 75036. A search link returns 400.
     *   - region: Shop used when query is a number or a path. de is Germany (default).
     *   - return_page_source: Set to true to get the raw HTML in result.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bitibaProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bitiba_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Bitiba Search. Search a live Bitiba country shop. Germany is the default. www.bitiba.com is closed and returns 400. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/bitiba/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): What to look for. A word such as hundefutter, or a Bitiba search link. A product link returns 400. www.bitiba.com returns 400.
     *   - region: Country shop. de is Germany (default), fr is France, uk is the United Kingdom. gb means uk.
     *   - page: Page number, starting at 1. Page 2 uses p=2.
     *   - return_page_source: Set to true to get the raw HTML in result.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bitibaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bitiba_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Bol Product. Read one bol.com product by URL or product id, in nl, be-nl, or be-fr. You get the selling price, the list price, and the seller. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/bol/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL or numeric product id.
     *   - region: Shop. Use nl for the Netherlands in Dutch, be-nl for Belgium in Dutch, or be-fr for Belgium in French. Leave empty for nl. A full URL picks the shop from the p…
     *   - return_page_source: When true, return the raw HTML as {"result": "..."}.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bolProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bol_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Bol Search. Search bol.com by keyword. Region is nl, be-nl, or be-fr. Page the product cards. Sponsored ads can repeat across pages. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/bol/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or full bol.com search URL. A product URL is rejected.
     *   - region: Shop. Use nl for the Netherlands in Dutch, be-nl for Belgium in Dutch, or be-fr for Belgium in French. Leave empty for nl. A full URL picks the shop from /nl/n…
     *   - page: Page number, starting at 1. Page 2 asks bol for the next screen of the same search.
     *   - return_page_source: When true, return the raw HTML as {"result": "..."}.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bolSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bol_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Boulanger Product. Read one Boulanger product from its URL or product id. You get price, brand, rating, seller, and specifications. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/boulanger/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL /ref/{id}, or the numeric product id.
     *   - return_page_source: When true, returns the raw HTML instead of the parsed JSON. The response shape is {"result": "<html>..."}. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function boulangerProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('boulanger_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Boulanger Search. Search Boulanger by keyword and page the product grid. Cards include price, brand, seller, and the product URL. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/boulanger/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword, a Boulanger /resultats URL, or a /c/ category URL.
     *   - page: Page number, from 1. Default is 1. Page 2 is sent as numPage=2 and returns different product ids.
     *   - return_page_source: When true, returns the raw HTML instead of the parsed JSON. The response shape is {"result": "<html>..."}. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function boulangerSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('boulanger_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Brave Search. Access the Brave search engine results directly through our efficient Piloterr service for reliable data scraping. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/brave/search`
     *
     * @param array{query: string, page?: int|float, gl?: string, hl?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The search query to execute on Brave Search. Supports all standard Brave search operators.
     *   - page: Page number of results to retrieve. Used for pagination.
     *   - gl: Country code, for example us, fr, gb, de.
     *   - hl: Language code, for example en, fr, de.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function braveSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('brave_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Brico Dépôt Product. Read one Brico Dépôt product from its product URL. You get price, brand, SKU, and availability. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/bricodepot/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL /p/{ean}/{slug}.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bricodepotProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bricodepot_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Brico Dépôt Search. Search Brico Dépôt with a /produits/ listing URL, not a keyword box. Page 2 is the same path with /2 at the end. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/bricodepot/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Brico Dépôt listing URL under /produits/.
     *   - page: Page from 1. Page 2 is the /2 path suffix.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bricodepotSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bricodepot_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Bricorama Product. Read one Bricorama product from its URL. You get price, brand, and the product details. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/bricorama/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL /p/{slug}/{ean}.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bricoramaProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bricorama_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Bricorama Search. Search Bricorama by keyword or search URL and page the home-improvement grid. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/bricorama/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword, or a Bricorama /search URL.
     *   - page: Page from 1. Sent as ?page= on the listing.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function bricoramaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('bricorama_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Carrefour Product. Read one Carrefour.fr product from its page URL. Every product returns the same keys: price, brand, pack size, Nutriscore, categories, unit price, and customer reviews. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/carrefour/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product page URL on www.carrefour.fr. The path starts with /p/.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function carrefourProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('carrefour_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Carrefour Search. Search for products on Carrefour by keyword or URL, returning structured listings with prices, ratings, and pagination. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/carrefour/search`
     *
     * @param array{query: string, domain?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full Carrefour search page URL.
     *   - domain: Carrefour domain to search on.
     *   - page: Page number to retrieve.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function carrefourSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('carrefour_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Carrefour Suggest. Get product suggestions from Carrefour by keyword or EAN, returning matching products with pricing, availability, and product details. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/carrefour/suggest`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or EAN code to get product suggestions from Carrefour.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function carrefourSuggest(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('carrefour_suggest', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Castorama Product. Read one Castorama product from its URL. You get price, brand, and specifications. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/castorama/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL ending in _CAFR.prd.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function castoramaProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('castorama_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Castorama Search. Search Castorama by keyword or search URL and page the DIY listings. Cards include title, price, and product link. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/castorama/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword, or a Castorama listing URL (/search or a .cat category).
     *   - page: Page from 1. Sent as ?page= on the listing.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function castoramaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('castorama_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Cdiscount Product. Extract full product details from a Cdiscount product page, including price, seller, ratings, specifications, and offers. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/cdiscount/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Cdiscount product page URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function cdiscountProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('cdiscount_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Cdiscount Product Offer. Retrieve all marketplace seller offers for a Cdiscount product, including prices, seller ratings, shipping costs, and availability. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/cdiscount/product/offer`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Cdiscount product offer page URL. Pass the multiple_offer_url value returned by the Cdiscount Product API.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function cdiscountProductOffer(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('cdiscount_product_offer', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Cdiscount Search. Extract product listings from Cdiscount search results or category pages for market intelligence and competitive analysis. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/cdiscount/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Cdiscount search results page URL. Use any URL from a search or category browse on cdiscount.com.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function cdiscountSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('cdiscount_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Centris Property. Read one Centris property from its URL or listing id. You get price, address, rooms, and the broker. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/centris/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Centris listing URL, in English or French.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function centrisProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('centris_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Centris Search. Search Centris listings by city or by a full results URL. Use the English or French path. Page through properties for sale. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/centris/search`
     *
     * @param array{query: string, page?: int|float, language?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Place name or a full Centris results URL.
     *   - page: Page number, starting at 1. Default is 1.
     *   - language: Results language when query is a place name. Default is en.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function centrisSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('centris_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Chewy Product. Read one Chewy product by URL or numeric id. The default mode is expert and returns the historical product cache. simple returns one snake_case product. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/chewy/product`
     *
     * @param array{query: string, mode?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Which product to read. A Chewy product URL such as https://www.chewy.com/purina-pro-plan-adult-sensitive-skin/dp/128666, or just the numeric id 128666. A searc…
     *   - mode: Which JSON to return. Default expert.
     *   - return_page_source: Set to true to get the rendered HTML in result instead of JSON. Default false. The string false stays false and still returns JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function chewyProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('chewy_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Chewy Search. Search Chewy by keyword or listing URL. The default mode is expert and returns the historical listing objects. simple returns short snake_case cards. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/chewy/search`
     *
     * @param array{query: string, page?: int|float, mode?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): What to search for. A keyword such as salmon kibble, or a Chewy search or category link such as https://www.chewy.com/s?query=dog+food. A product link (a URL t…
     *   - page: Which page to fetch, starting at 1. Leave this empty for page 1. If query is a listing link that already has page=2, this value replaces that page. In simple m…
     *   - mode: Which JSON to return. Default expert.
     *   - return_page_source: Set to true to get the rendered HTML in result instead of JSON. Default false. The string false stays false and still returns JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function chewySearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('chewy_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ClearedJobs Job. Fetch one cleared job by its URL or by a slug that ends in the numeric id. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/clearedjobs/job`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Job URL or slug ending in the numeric id. Example: analyst-washington-district-of-columbia-1902823.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function clearedjobsJob(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('clearedjobs_job', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ClearedJobs Search. Search cleared jobs by keyword. Only the first HTML page is available, so pagination.next is null and page 2 returns 404. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/clearedjobs/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Keyword or a clearedjobs.net jobs URL. Example: analyst. A job URL returns 400.
     *   - page: Optional. Only page 1 is available. Example: 1. page=2 returns 404. pagination.next is always null.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function clearedjobsSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('clearedjobs_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Company Database. Retrieve comprehensive company data including financials, technologies, social profiles, and location by domain name. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/company`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The domain name of the company to look up. Accepts multiple formats:
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function company(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('company', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Coolblue Product. Read one Coolblue product by article id or product URL, in the region of that shop. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/coolblue/product`
     *
     * @param array{query: string, region?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product link, or the article number.
     *   - region: Shop for a bare article number.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function coolblueProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('coolblue_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Coolblue Search. Search Coolblue with a product keyword. Region defaults to Belgium. Also use nl or de. Page through product cards. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/coolblue/search`
     *
     * @param array{query: string, page?: int|float, region?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search words, or a Coolblue listing link.
     *   - page: Page number, from 1.
     *   - region: Shop, when query is words rather than a full link.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function coolblueSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('coolblue_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Copart Lot. Copart Lot API: retrieve structured auction lot data by lot number or URL. Specs, damage, bids, photos, yard location and sale status across regional Copart sites. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/copart/lot`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Copart lot number or full lot URL.
     *   - region: Regional Copart site when query is a lot number only. Defaults to US.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function copartLot(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('copart_lot', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Copart Search. Copart Search API: search auction lots by keyword or URL across Copart regional sites. Returns lot listings and pagination. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/copart/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full Copart search URL.
     *   - region: Copart regional site when query is a keyword or lot number only. Defaults to US.
     *   - page: Page number (default: 1).
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function copartSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('copart_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Costco Product. Costco Product API: fetch full product page data from a product ID or URL across regional Costco sites. Returns pricing, availability, ratings, images and breadcrumbs via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/costco/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Costco product ID or full product URL.
     *   - region: Regional Costco site. Accepts a region code (us, fr, ca, uk, …) or full host (www.costco.fr). Defaults to US (www.costco.com) when omitted.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function costcoProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('costco_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Costco Search. Costco Search API: search product listings by keyword or URL across 13 regional Costco sites. Returns prices, availability, review counts and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/costco/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full regional search URL.
     *   - region: Regional Costco site. Accepts a region code (us, fr, ca, uk, …) or full host (www.costco.fr). Defaults to US (www.costco.com) when omitted.
     *   - page: 1-based page number override. Uses currentPage (most regions) or page (UK) when rebuilding pagination URLs.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function costcoSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('costco_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Crunchbase Company Info. Convert URLs into detailed Crunchbase profiles for immediate company insights. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/crunchbase/company/info`
     *
     * @param array{query?: string, domain?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query: Search for a company by its name, permalink, or full Crunchbase URL.
     *   - domain: Perform a reverse lookup by domain name to find the associated Crunchbase company profile.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function crunchbaseCompanyInfo(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('crunchbase_company_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Crunchbase Event. Retrieve detailed Crunchbase event profiles with speakers, sponsors, exhibitors, and press timelines. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/crunchbase/event`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Retrieve event data using its Crunchbase permalink or full URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function crunchbaseEvent(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('crunchbase_event', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Crunchbase Funding Round. Retrieve full details of a specific Crunchbase funding round including investors and press timeline. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/crunchbase/funding_round`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The permalink of the specific funding round to retrieve. This is the unique identifier found in the Crunchbase funding round URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function crunchbaseFundingRound(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('crunchbase_funding_round', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Crunchbase Funding Rounds. Monitor funding history and financial milestones of companies with Crunchbase data. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/crunchbase/funding_rounds`
     *
     * @param array{days_since_announcement?: int|float, investment_type?: string, investor_identifiers?: string, funded_organization_identifier?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - days_since_announcement: Filter funding rounds announced within the last N days.
     *   - investment_type: Filter by funding round type. Accepted values:
     *   - investor_identifiers: Filter rounds by a specific investor using their Crunchbase UUID.
     *   - funded_organization_identifier: Filter rounds by a specific funded organization using their Crunchbase UUID.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function crunchbaseFundingRounds(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('crunchbase_funding_rounds', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Crunchbase People Info. Retrieve detailed Crunchbase profiles for individuals including career history, investments, and board positions. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/crunchbase/people/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search for a person by their name, Crunchbase permalink, or full Crunchbase profile URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function crunchbasePeopleInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('crunchbase_people_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Crunchbase Search. Search Crunchbase for companies and people by keyword and retrieve their profiles and Crunchbase identifiers. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/crunchbase/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The search keyword or phrase to query across Crunchbase. Searches both organizations and people.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function crunchbaseSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('crunchbase_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Cultura Product. Read one Cultura product from its URL or SKU. You get price, EAN, seller, condition, and stock wording. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/cultura/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Link of the Cultura product page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function culturaProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('cultura_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Cultura Search. Search Cultura by keyword and page through books, games, and culture products. Cards include title, price, availability, and the product link. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/cultura/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Words to search for on Cultura, or the search page link.
     *   - page: Page number, starting at 1. For example, 2 returns the next page of results.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function culturaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('cultura_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Darty Product. Read one Darty product sheet from a product URL or a Darty product id. You get price, brand, availability, rating, and specifications. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/darty/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL on www.darty.com. The path is under /nav/achat/ and ends in .html.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function dartyProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('darty_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Darty Search. Search Darty by keyword or search URL and page through the listing. Each card has title, price, brand, seller, and product link. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/darty/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or a Darty search URL on www.darty.com.
     *   - page: 1-based page number. Defaults to 1. Page 2 returns the next 30 products.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function dartySearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('darty_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Dataset Linkedin Company. Query the LinkedIn company dataset with Elasticsearch Query DSL. Filter by name, domain, industry, headcount, and country. POST-only, 1 credit per row returned. Credit cost: 1 credit per row.
     *
     * `POST /v2/datasets/linkedin/company`
     *
     * @param array{fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function datasetsLinkedinCompany(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('datasets_linkedin_company', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Decathlon Product. Read one Decathlon product from a product URL, a product path, or a keyword. A keyword uses the first search hit. Set region when the query does not already name the shop. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/decathlon/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product link, a /p/... or /products/... path, or a keyword. A keyword opens the first search hit. A search link returns 400.
     *   - region: Country shop when query is a keyword or a path. Default is fr. A full product link picks the shop.
     *   - return_page_source: Set to true to get the raw page body in result.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function decathlonProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('decathlon_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Decathlon Search. Search a Decathlon shop with a keyword or a search URL. Choose the country with region, or let a full link pick the shop, then page through titles, prices, and product links. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/decathlon/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword, or a Decathlon search link.
     *   - region: Country shop. Default is fr. A full link in query picks the shop, and a conflicting region returns 400.
     *   - page: Page number starting at 1.
     *   - return_page_source: Set to true to get the raw HTML in result.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function decathlonSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('decathlon_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * DigiKey Product. Get a DigiKey product page: part numbers, manufacturer, price tiers, stock, images, datasheet and specs via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/digikey/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full DigiKey product detail URL, or relative path.
     *   - region: DigiKey country TLD when query is a relative path.
     *   - return_page_source: When true, return rendered HTML as {"result": "..."} instead of JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function digikeyProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('digikey_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * DigiKey Search. Search DigiKey country sites by keyword or result/filter URL. Returns category branches or product listings with pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/digikey/search`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword, DigiKey result/filter URL, or relative path.
     *   - region: DigiKey country TLD when query is not a full URL.
     *   - return_page_source: When true, return rendered HTML as {"result": "..."} instead of JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function digikeySearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('digikey_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * DOAJ Article. Fetch one DOAJ article by its id or by a doaj.org article URL. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/doaj/article`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Article id or a doaj.org/article URL. Example: 000004687a3a411cb466625281f2ceb0.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function doajArticle(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('doaj_article', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * DOAJ Journal. Fetch one DOAJ journal by ISSN, journal id, or a doaj.org toc URL. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/doaj/journal`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Journal ISSN, journal id, or a doaj.org/toc URL. Example: 2747-173X.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function doajJournal(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('doaj_journal', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * DOAJ Search. Search DOAJ articles or journals. kind is article (default) or journal. Article ids and journal ISSNs are the detail keys. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/doaj/search`
     *
     * @param array{query: string, kind?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Keyword or a doaj.org search URL. Example: climate. An article or journal URL returns 400.
     *   - kind: Optional. article or journal. Example: journal. Defaults to article.
     *   - page: Optional. Page number from 1. Example: 2. Defaults to 1. Each page has 10 records.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function doajSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('doaj_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Domain DNSBL. Check if a domain or IP address is listed in DNS-based blacklists (DNSBL), with detailed provider-level detection and category information. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/domain/dnsbl`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A domain name or IP address to check against DNS-based blacklists (DNSBL).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function domainDnsbl(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('domain_dnsbl', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Domain Malicious. Check if a domain or IP address has been flagged as malicious across multiple threat intelligence feeds, with source attribution. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/domain/malicious`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A domain name or IP address to check for malicious activity across multiple threat intelligence sources.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function domainMalicious(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('domain_malicious', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Domain Whois. Retrieve WHOIS registration data for any domain, including registration dates, registrar details, name servers, and contact information. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/domain/whois`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A domain name for which you want to retrieve WHOIS registration information.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function domainWhois(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('domain_whois', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Domain.com.au Property. Read one Domain.com.au listing from its URL. The response is a flat object with price, address, agency, and photos. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/domaincomau/property`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Domain listing URL. The path ends with the listing id.
     *   - return_page_source: Optional. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function domaincomauProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('domaincomau_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Domain.com.au Search. Search Domain.com.au by suburb. mode is sale, rent, or sold. page starts at 1. Each card has a dollar price and a price label rebuilt from that amount. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/domaincomau/search`
     *
     * @param array{query: string, mode?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Suburb with state and postcode, a location slug, or a Domain search URL.
     *   - mode: sale, rent, or sold when query is a place.
     *   - page: Page from 1.
     *   - return_page_source: Optional. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function domaincomauSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('domaincomau_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * DuckDuckGo Search. Query DuckDuckGo via API and retrieve structured organic results with region and language. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/duckduckgo/search`
     *
     * @param array{query: string, page?: int|float, gl?: string, hl?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search query sent to DuckDuckGo Search.
     *   - page: Page number. Page 1 is the first page of results.
     *   - gl: Country code, for example us, fr, gb, de, jp.
     *   - hl: Language code, for example en, fr, de, ja, zh.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function duckduckgoSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('duckduckgo_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * eBay Product. eBay Product API: one listing on a supported eBay site, by URL or item id (3 credits). Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/ebay/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Item id, or an item URL on a supported eBay site.
     *   - return_page_source: When true, return raw HTML.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function ebayProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('ebay_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * eBay Search. eBay Search API: search listings on supported eBay sites. Returns price, seller, and pagination (3 credits). Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/ebay/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword on www.ebay.com, or a search URL on a supported eBay site.
     *   - page: Page number, sent as _pgn. Default 1 for a keyword. On a URL, the page already in the URL is kept when this is empty. Below 1 returns 400.
     *   - return_page_source: When true, return raw HTML.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function ebaySearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('ebay_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * El Corte Inglés Product. El Corte Inglés Product API. Fetch a full product page from elcorteingles.es by URL or product id. Returns pricing, stock, images and identifiers via browser rendering. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/elcorteingles/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL or product id (A… / MP_…).
     *   - return_page_source: When true, return the raw HTML as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function elcorteinglesProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('elcorteingles_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * El Corte Inglés Search. El Corte Inglés Search API. Search product listings on elcorteingles.es by keyword or URL. Returns prices, brands, images and pagination via webunlocker. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/elcorteingles/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full El Corte Inglés search URL.
     *   - page: 1-based page number. Overrides /search-nwx/{page}/ when present in the URL (default: from URL or 1).
     *   - return_page_source: When true, return the raw HTML as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function elcorteinglesSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('elcorteingles_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * E.Leclerc Product. Read one E.Leclerc product by EAN or product URL. Pass store_id to get that store's price and stock. Another store returns a different price and stock. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/eleclerc/product`
     *
     * @param array{query: string, store_id?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): E.Leclerc product EAN or product page URL.
     *   - store_id: E.Leclerc store sign code. This selects that store's price and stock.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function eleclercProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('eleclerc_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * E.Leclerc Search. Search for products on E.Leclerc by keyword with optional store-specific filtering and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/eleclerc/search`
     *
     * @param array{query: string, store_id?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or phrase to query on E.Leclerc.
     *   - store_id: ID of a specific E.Leclerc store to search in.
     *   - page: Page number for paginated results.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function eleclercSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('eleclerc_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * E.Leclerc Suggest. Get instant product autocomplete suggestions from E.Leclerc for a given keyword or EAN. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/eleclerc/suggest`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search term or EAN to get product suggestions for.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function eleclercSuggest(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('eleclerc_suggest', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Email Analyzes. Analyze a domain to retrieve its email infrastructure. Microsoft 365 and Google Workspace domains, SPF records, and DNS configurations. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/email/analyzes`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The domain name you want to analyze for email infrastructure.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function emailAnalyzes(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('email_analyzes', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Email Finder. Find verified professional email addresses by combining a person's full name with their company domain or company name. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/email/finder`
     *
     * @param array{query: string, company_domain?: string, company_name?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full name of the person whose professional email address you want to find.
     *   - company_domain: The company's domain name. Multiple formats are accepted:
     *   - company_name: The company name of the person you are looking for.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function emailFinder(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('email_finder', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Email Verify. Verify whether an email address is valid and deliverable, returning a clear status to prevent bounces and maintain list hygiene. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/email/verify`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The email address you want to verify.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function emailVerify(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('email_verify', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Europages Company. Europages company profile with address, supplier type and the products listed on the page (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/europages/company`
     *
     * @param array{query: string, domain?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Profile URL copied from a search card, or a slug.
     *   - domain: Site when query is a slug. Same values as search. Default fr. Ignored when query is a URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function europagesCompany(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('europages_company', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Europages Search. Search Europages suppliers by keyword or category URL. Returns company cards and pagination (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/europages/search`
     *
     * @param array{query: string, domain?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword, or a category / search URL on Europages.
     *   - domain: Site of a keyword: fr (default), de, co.uk (en, uk, gb), es, it, nl, and the other Europages TLDs. Ignored when query is a URL. German uses /suche/.
     *   - page: Page from 1. Page 2 and after use /pg-N/. 30 companies per page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function europagesSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('europages_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Eventbrite Event. Get one Eventbrite event by detail URL or numeric id: venue, organizer, schedule, and description (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/eventbrite/event`
     *
     * @param array{query: string, domain?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Event detail URL or numeric id.
     *   - domain: Country TLD when query is a bare id (fr, com, es, com.mx, …). Ignored if query is a full URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function eventbriteEvent(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('eventbrite_event', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Eventbrite Search. Search Eventbrite events by keyword or paste a city/category URL. Returns event cards and pagination (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/eventbrite/search`
     *
     * @param array{query?: string, domain?: string, location?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query: Keyword, or paste a full Eventbrite city / category / search URL.
     *   - domain: Eventbrite TLD when query is a keyword (fr, com, es, com.mx, co.uk, …). Ignored if query is a full URL.
     *   - location: Location slug such as france--paris (keyword searches only).
     *   - page: Page number.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function eventbriteSearch(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('eventbrite_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Expedia Ad. Fetch one Expedia hotel from its information URL: name, postal address, and amenity groups. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/expedia/ad`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): An Expedia hotel information URL. The response is one flat hotel. hotel_id comes from .h{id}.Hotel-Information when that pattern is in the URL, and is null oth…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function expediaAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('expedia_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Expedia Flight. Search Expedia flights by airport route and dates, or by a flight search URL. Each offer includes the airline, times, stops, and displayed price. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/expedia/flight`
     *
     * @param array{query: string, departure_date?: string, return_date?: string, adults?: int|float, cabin_class?: string, region?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A route or a full Expedia Flights-Search URL. Empty, a route without two airport codes, or a non-Expedia URL returns 400. A full URL is opened as given. price…
     *   - departure_date: Departure as YYYY-MM-DD for a route. Omit it and the route uses 2026-11-15. A value that is not YYYY-MM-DD returns 400. Ignored when query is a full URL.
     *   - return_date: Return date as YYYY-MM-DD. Omit it for a one-way trip. A value that is not YYYY-MM-DD returns 400. Ignored when query is a full URL.
     *   - adults: Adult passengers for a route. Omit it and the request uses 1. Ignored when query is a full URL.
     *   - cabin_class: Label copied onto every result as cabin_class. Omit it and each result uses economy. It does not add a cabin filter to the Expedia URL.
     *   - region: Host for a route. Omit it for www.expedia.com. Allowed: us, ca, uk, au, fr, de, es, it, nl, mx. Any other value returns 400. Ignored when query is a full URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function expediaFlight(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('expedia_flight', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Expedia Search. Execute a hotel search on Expedia using a direct search URL and receive structured hotel listings with prices, ratings, and availability. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/expedia/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A valid Expedia hotel search URL. Copy the URL directly from your Expedia search results page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function expediaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('expedia_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Fashionphile Product. Load one Fashionphile product from a handle or a product URL. Keywords and search URLs belong on the search endpoint. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/fashionphile/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product handle or a fashionphile.com product URL. The request reads products/{handle}.js and returns one flat product. price is the USD amount and price_displa…
     *   - return_page_source: Default false. true replaces the product object with result, the raw Shopify JSON text.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function fashionphileProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('fashionphile_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Fashionphile Search. Search Fashionphile by keywords, a search URL, a collection URL, or a products.json URL. A product handle or product URL belongs on the product endpoint. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/fashionphile/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keywords, a Fashionphile search URL, a collection URL, or a products.json URL. Empty returns 400.
     *   - page: Page number starting at 1. Omit it for page 1.
     *   - return_page_source: Default false. true replaces results and pagination with result, the raw Shopify JSON text.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function fashionphileSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('fashionphile_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Chewy Products Finder. Find Chewy product URLs by product name, ID, or any combination of filters to use in product detail and rendering API calls.
     *
     * `GET / POST /v2/finder/chewy-products`
     *
     * @param array{search?: string, query?: string, id?: string, domain?: string, filter?: string, limit?: int|float, offset?: int|float, sort?: string, fields?: string, count?: bool, is_async?: bool, soft_fail?: bool} $params
     *   - search: Free-text search across product titles and IDs. Optional if at least one filter is provided.
     *   - query: Legacy alias of search. Kept for backward compatibility.
     *   - id: Filter by one or several internal product IDs. Provide a comma-separated list to match multiple IDs.
     *   - domain: Filter by website domain. Comma-separated values are accepted.
     *   - filter: Raw filter expression for advanced filtering. Combined with the shorthand filters using AND.
     *   - limit: Maximum number of results to return. Default is 10, maximum is 100.
     *   - offset: Number of results to skip for pagination. Default is 0.
     *   - sort: Sort the results. Provide one or several attributes with :asc or :desc, comma-separated.
     *   - fields: Comma-separated list of fields to return. Defaults to all fields.
     *   - count: When true, the response is wrapped in an object containing the total estimated count plus the hits: { count, hits }. When false or omitted, returns the raw hit…
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function finderChewyProducts(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('finder_chewy_products', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Eleclerc Stores Finder. Search Eleclerc stores by name or city to retrieve contact details, opening hours, and geolocation.
     *
     * `GET / POST /v2/finder/eleclerc-stores`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Filters stores based on a search string. The search is non-case-sensitive and returns all stores whose names contain the specified string.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function finderEleclercStores(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('finder_eleclerc_stores', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Countries Finder. Search the list of Google-supported countries by name or country code to use in Google Search API requests.
     *
     * `GET / POST /v2/finder/google-countries`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Filters countries based on a search string. The search is non-case-sensitive and returns all countries whose names contain the specified string.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function finderGoogleCountries(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('finder_google_countries', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Languages Finder. Search the list of Google-supported languages by name to retrieve language codes for use in Google Search API requests.
     *
     * `GET / POST /v2/finder/google-languages`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Filters languages based on a search string. The search is non-case-sensitive and returns all languages whose names contain the specified string.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function finderGoogleLanguages(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('finder_google_languages', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Locations Finder. Search Google-supported locations by name to retrieve location IDs and GPS coordinates for geo-targeted search API calls.
     *
     * `GET / POST /v2/finder/google-locations`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Restricts your search to locations that contain the supplied string.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function finderGoogleLocations(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('finder_google_locations', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Leroy Merlin Products Finder. Find Leroy Merlin product URLs by product name, ID, or any combination of filters to use in product detail and rendering API calls.
     *
     * `GET / POST /v2/finder/leroymerlin-products`
     *
     * @param array{search?: string, query?: string, id?: string, domain?: string, filter?: string, limit?: int|float, offset?: int|float, sort?: string, fields?: string, count?: bool, is_async?: bool, soft_fail?: bool} $params
     *   - search: Free-text search across product titles and IDs. Optional if at least one filter is provided.
     *   - query: Legacy alias of search. Kept for backward compatibility.
     *   - id: Filter by one or several internal product IDs. Provide a comma-separated list to match multiple IDs.
     *   - domain: Filter by website domain. Comma-separated values are accepted.
     *   - filter: Raw filter expression for advanced filtering. Combined with the shorthand filters using AND.
     *   - limit: Maximum number of results to return. Default is 10, maximum is 100.
     *   - offset: Number of results to skip for pagination. Default is 0.
     *   - sort: Sort the results. Provide one or several attributes with :asc or :desc, comma-separated.
     *   - fields: Comma-separated list of fields to return. Defaults to all fields.
     *   - count: When true, the response is wrapped in an object containing the total estimated count plus the hits: { count, hits }. When false or omitted, returns the raw hit…
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function finderLeroymerlinProducts(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('finder_leroymerlin_products', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Leroy Merlin Stores Finder. Search Leroy Merlin stores by name, city or postal code to retrieve their store ID, slug, address and store locator URL.
     *
     * `GET / POST /v2/finder/leroymerlin-stores`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Filters Leroy Merlin stores based on a search string. The search is non-case-sensitive and matches store names, cities, postal codes and store slugs.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function finderLeroymerlinStores(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('finder_leroymerlin_stores', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LinkedIn Industries Finder. Search LinkedIn industry taxonomy to retrieve industry IDs and hierarchies for use in LinkedIn API calls and data enrichment.
     *
     * `GET / POST /v2/finder/linkedin-industries`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Restricts your search to industries that contain the supplied string.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function finderLinkedinIndustries(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('finder_linkedin_industries', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Mr.Bricolage Stores Finder. Search Mr.Bricolage stores by name, city or postal code to retrieve their store ID, slug, contact information and geolocation.
     *
     * `GET / POST /v2/finder/mrbricolage-stores`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Filters Mr.Bricolage stores based on a search string. The search is non-case-sensitive and matches store names, cities and postal codes.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function finderMrbricolageStores(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('finder_mrbricolage_stores', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Fiverr Profile Info. Extract complete public profile data from any Fiverr seller, including gigs, ratings, reviews, skills, portfolio, and consultation pricing. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/fiverr/profile/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Fiverr profile URL of the seller you want to extract information from.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function fiverrProfileInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('fiverr_profile_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Fiverr Search. Search Fiverr gigs using a direct search URL and receive paginated listings with seller information, gig titles, images, and seller levels. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/fiverr/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A Fiverr search URL for gigs.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function fiverrSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('fiverr_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Fnac Product. Read one Fnac product from its URL or product id. You get the price, brand, EAN, seller, and rating. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/fnac/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL (/a{id} or /mp{id}) or the numeric Fnac id. A keyword or a search URL returns 400.
     *   - return_page_source: When true, returns the raw HTML instead of the parsed JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function fnacProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('fnac_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Fnac Search. Search Fnac for a keyword or a SearchResult URL. Each card has the product id, name, price, seller, and stock. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/fnac/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or a Fnac SearchResult URL. A product URL returns 400.
     *   - page: Page number, from 1. Default is 1. Page 2 is sent as PageIndex=2.
     *   - return_page_source: When true, returns the raw HTML instead of the parsed JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function fnacSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('fnac_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Fotocasa Property Ad. Get a full Fotocasa listing by URL: price, features, coordinates, energy certificate, images, and agency (browser rendering, 2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/fotocasa/ad`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Fotocasa ad URL (/comprar/ or /alquiler/, ending with /d).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function fotocasaAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('fotocasa_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Fotocasa Property Search. Search Fotocasa listings by city or search URL. Returns prices, rooms, area, coordinates, and agency data via browser rendering (2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/fotocasa/search`
     *
     * @param array{query: string, operation?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): City name or full Fotocasa search URL.
     *   - operation: Used when query is a city name (ignored for full URLs).
     *   - page: Page number (1-based). Default: 1. Page 2 maps to /l/2.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function fotocasaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('fotocasa_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Franchise Direct Franchise. Read one Franchise Direct profile: cash requirement, franchise fee, investment range, and training. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/franchisedirect/franchise`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. A Franchise Direct profile URL from search, or the same path beginning with /. A keyword or a listing URL returns 400.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function franchisedirectFranchise(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('franchisedirect_franchise', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Franchise Direct Search. Search Franchise Direct listings by keyword or listing URL. Each card includes a USD cash figure and a numeric minimum. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/franchisedirect/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. A keyword, or a Franchise Direct listing URL (search, directory, or category). A profile URL such as /coffee-franchises/coffeenow returns 400 on this…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function franchisedirectSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('franchisedirect_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Fressnapf Product. Read a Fressnapf Germany product sheet from its URL. Returns sku, GTIN, euro price, unit price, and pack variants. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/fressnapf/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL on www.fressnapf.de.
     *   - return_page_source: When true, return the raw HTML. The string false stays false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function fressnapfProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('fressnapf_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Fressnapf Search. Search Fressnapf Germany by keyword or category URL. Returns product cards with euro prices and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/fressnapf/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or a fressnapf.de search or category URL.
     *   - page: Page number, starting at 1. Example: 2.
     *   - return_page_source: When true, return the raw HTML. The string false stays false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function fressnapfSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('fressnapf_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Funda Property. Read one Funda listing from its URL. You get the asking price, living area, and the feature groups. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/funda/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Listing URL on www.funda.nl, under /detail/koop or /detail/huur.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function fundaProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('funda_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Funda Search. Search Funda by place. Set offering to koop for sale or huur for rent, then page the listings. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/funda/search`
     *
     * @param array{query: string, offering?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): City, area, or a Funda search URL.
     *   - offering: Sale or rent when query is a place.
     *   - page: Page from 1. Example: 2. Funda receives this as search_result=2. Page 1 and page 2 return different listings.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function fundaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('funda_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * G2 Product Info. Read a G2 product reviews page: rating, pricing, categories, alternatives, screenshots, and the reviews shown on the page. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/g2/product/info`
     *
     * @param array{query: string, nps_score?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product slug or a www.g2.com product URL.
     *   - nps_score: Keep reviews of one star rating, from 1 to 5. Omit it to read the unfiltered reviews page.
     *   - return_page_source: Return the rendered HTML instead of the parsed product.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function g2ProductInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('g2_product_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * GitHub User Info. Retrieve public GitHub user profile data including bio, company, location, follower count, repositories, and associated email addresses. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/github/user/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A GitHub user identifier. Multiple formats are accepted:
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function githubUserInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('github_user_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Glassdoor Company Info. Get one Glassdoor company profile by URL or employer id (2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/glassdoor/company/info`
     *
     * @param array{query: string, domain?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Company URL or employer id.\n\nExample:\n\n 1692882
     *   - domain: Glassdoor TLD when query is not a full URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function glassdoorCompanyInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('glassdoor_company_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Glassdoor Company Search. Search Glassdoor employers by keyword across country sites (2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/glassdoor/company/search`
     *
     * @param array{query: string, domain?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Employer keyword, or a full Glassdoor autocomplete URL.\n\nExample:\n\n airbus
     *   - domain: Glassdoor TLD (fr, com, co.uk, …).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function glassdoorCompanySearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('glassdoor_company_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Glassdoor Job Info. Get one Glassdoor job listing by URL or jl id (2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/glassdoor/job/info`
     *
     * @param array{query: string, domain?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Job listing URL or jl id.\n\nExample:\n\n 1010283388161
     *   - domain: Glassdoor TLD when query is not a full URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function glassdoorJobInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('glassdoor_job_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Glassdoor Job Search. Search Glassdoor jobs by keyword or SEO URL, with domain and filters (2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/glassdoor/job/search`
     *
     * @param array{query: string, domain?: string, page?: int|float, sort_by?: string, remote?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or full Glassdoor job search URL.
     *   - domain: Glassdoor TLD when query is not a full URL.
     *   - page: Page number.
     *   - sort_by: Glassdoor sortBy value (e.g. date_desc).
     *   - remote: When true, set remoteWorkType=1.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function glassdoorJobSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('glassdoor_job_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Goodreads Book. Read one Goodreads book by the numeric id from search, such as 44767458 for Dune. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/goodreads/book`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. The numeric Goodreads book id from search, or a /book/show/ URL. A title is not accepted.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function goodreadsBook(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('goodreads_book', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Goodreads Search. Search Goodreads books by keyword. pagination.next is a Goodreads search URL for the following page. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/goodreads/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. A book keyword, or a Goodreads search URL (the path contains /search or the query contains q=).
     *   - page: Optional. Page number, starting at 1. Omitted or blank uses page 1. A value below 1 returns 400. When query is already a Goodreads search URL, this number repl…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function goodreadsSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('goodreads_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Images. Google Images Scraper API – bringing the power of visual search to your fingertips. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/google/images`
     *
     * @param array{query: string, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, page?: int|float, safe?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The image search query to execute on Google Images.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - page: Page number for pagination. Images are returned in batches of 100 per page.
     *   - safe: Adult content filter. active enables Google SafeSearch; off disables it. Omit to use Google default.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleImages(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_images', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Jobs. Extract job listings from Google Careers for enhanced recruitment and market analysis. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/google/jobs`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Job search term or keyword for querying Google job listings.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleJobs(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_jobs', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Maps. Extract comprehensive company data from Google Maps for enhanced business insights. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/google/maps`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Business name or keyword to search for relevant data.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleMaps(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_maps', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google News. Extract real-time news articles from Google News with advanced filtering by topic, location, language, and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/google/news`
     *
     * @param array{query: string, location?: string, uule?: string, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, page?: int|float, num?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The news search query to execute on Google News. Supports standard Google search operators.
     *   - location: City or region from which the news search should originate. Simulates a search performed from the specified location.
     *   - uule: Google-encoded location string for precise geographic targeting. Use this instead of location when you need exact control.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - page: Page number of news results to retrieve.
     *   - num: Maximum number of results to return per page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleNews(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_news', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Search. Scrape real-time Google search results with organic listings, knowledge graph, related searches, and advanced filters. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/google/search`
     *
     * @param array{query: string, tbs?: string, location?: string, uule?: string, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, page?: int|float, num?: int|float, safe?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The search query to execute on Google. Supports all standard Google search operators.
     *   - tbs: Advanced time-range and filter string for Google Search. Used to restrict results by recency.
     *   - location: City or region from which the search should originate. Simulates a real user's search from the specified location.
     *   - uule: Google-encoded location string for precise geographic targeting.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - page: Page number of search results to retrieve.
     *   - num: Maximum number of results to return per page (e.g. 10, 40, 100).
     *   - safe: Adult content filter. active enables Google SafeSearch; off disables it. Omit to use Google default.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google AI Mode. Scrape real-time Google AI Mode answers: text_blocks, references, and shopping_results. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/google/search/ai`
     *
     * @param array{query: string, location?: string, uule?: string, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The question or search query to send to Google AI Mode. Natural-language questions work best; advanced operators are also accepted.
     *   - location: City or region from which the AI Mode search should originate. Simulates a real user searching from that location.
     *   - uule: Google-encoded location string for precise geographic targeting. Mutually exclusive with location.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleSearchAi(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_search_ai', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Search Autocomplete. Retrieve real-time Google Search autocomplete suggestions for any query, with support for language and country localization. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/google/search/autocomplete`
     *
     * @param array{query: string, cp?: int|float, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The partial or complete search query for which you want to retrieve autocomplete suggestions from Google.
     *   - cp: Cursor position in the query string where autocomplete suggestions should be generated. Determines which part of the query is being completed.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleSearchAutocomplete(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_search_autocomplete', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Shopping. Search Google Shopping and retrieve structured product listings with prices, ratings, merchants, and product IDs. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/google/shopping`
     *
     * @param array{query: string, page?: int|float, location?: string, uule?: string, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, safe?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product search query on Google Shopping. Use a product name, brand, or category.
     *   - page: Page number of Shopping results. Each page returns about 20 products. There is no num parameter.
     *   - location: City or region used to localize Shopping results. Simulates a search from that location and generates the UULE parameter automatically.
     *   - uule: Google-encoded location string (UULE) for precise geo-targeting. Use location instead if you do not already have an encoded value.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - safe: Adult content filter. active enables Google SafeSearch; off disables it. Omit to use Google default.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleShopping(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_shopping', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Videos. Scrape video results from Google Videos search including YouTube, Reddit, and other video platforms, with location and language support. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/google/videos`
     *
     * @param array{query: string, location?: string, uule?: string, google_domain?: string, gl?: string, hl?: string, cr?: string, lr?: string, page?: int|float, num?: int|float, safe?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The video search query to execute on Google Videos. Supports standard Google search operators.
     *   - location: City or region from which the video search should originate.
     *   - uule: Google-encoded location string for precise geographic targeting.
     *   - google_domain: Google domain to use for the search. Defaults to google.com.
     *   - gl: Country to use for the Google search. Two-letter country code (e.g. us for the United States, uk for United Kingdom, or fr for France).
     *   - hl: Language to use for the Google search. Two or three-letter language code (e.g. en, es, fr), optionally followed by a region code (e.g. en-gb, es-419).
     *   - cr: Limit results to one or more countries. Use country{XX} with | as delimiter (e.g. countryFR|countryDE).
     *   - lr: Limit results to one or more languages. Use lang_{xx} with | as delimiter (e.g. lang_fr|lang_de).
     *   - page: Page number of video results to retrieve.
     *   - num: Maximum number of video results to return per page.
     *   - safe: Adult content filter. active enables Google SafeSearch; off disables it. Omit to use Google default.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleVideos(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('google_videos', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Ads Transparency Ad. Get one Google Ads Transparency creative by URL: dates, impressions, platforms, regions, and the text read from the preview image (2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/googleadstransparency/ad`
     *
     * @param array{query: string, region?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Creative URL from search.
     *   - region: ISO alpha-2. The matching region is returned first.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleadstransparencyAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('googleadstransparency_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Google Ads Transparency Search. Search the Google Ads Transparency Center by domain, advertiser, region, format, platform, and date. Returns creative cards and pagination (2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/googleadstransparency/search`
     *
     * @param array{query: string, region?: string, domain?: string, advertiser_id?: string, format?: string, platform?: string, preset_date?: string, start_date?: string, end_date?: string, topic?: string, page?: int|float, per_page?: int|float, cursor?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Domain name, advertiser name, advertiser id, or a full Ads Transparency URL.
     *   - region: Country. ISO alpha-2 (FR), anywhere, or a Transparency region code (2250 for France, 250 is also accepted).
     *   - domain: Domain filter. Used when query is not already a domain.
     *   - advertiser_id: Advertiser id, AR followed by digits.
     *   - format: Creative format.
     *   - platform: Comma-separated surfaces.
     *   - preset_date: Relative window.
     *   - start_date: Inclusive start date, YYYY-MM-DD or YYYYMMDD.
     *   - end_date: Inclusive end date, YYYY-MM-DD or YYYYMMDD. A single day uses the same value as start_date.
     *   - topic: Ad topic. Default: commercial.
     *   - page: Page number, from 1 to 20. Default: 1.
     *   - per_page: Page size, from 1 to 100. Default: 40.
     *   - cursor: Opaque cursor copied from pagination.next.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function googleadstransparencySearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('googleadstransparency_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Grainger Product. Get a Grainger US or Canada product page: SKU, brand, price, images, description and specs via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/grainger/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): SKU, full Grainger product URL, or relative /product/... path.
     *   - region: Grainger country when query is not a full URL (default: com).
     *   - return_page_source: When true, return rendered HTML as {"result": "..."} instead of JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function graingerProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('grainger_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Grainger Search. Search Grainger US or Canada by keyword, category URL or SKU. Returns product listings, category branches and suggestions via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/grainger/search`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword, full Grainger search/category URL, category path, or SKU.
     *   - region: Grainger country when query is not a full URL (default: com).
     *   - return_page_source: When true, return rendered HTML as {"result": "..."} instead of JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function graingerSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('grainger_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Greenhouse Job. Fetch one Greenhouse job by board/id, such as discord/8806482002, or by a job-boards.greenhouse.io job URL. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/greenhouse/job`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. board/id or a job URL. Example: discord/8806482002 or https://job-boards.greenhouse.io/discord/jobs/8806482002.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function greenhouseJob(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('greenhouse_job', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Greenhouse Search. List jobs on a Greenhouse board. query is the board token, such as discord. keyword filters title and location. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/greenhouse/search`
     *
     * @param array{query: string, keyword?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Board token or a job-boards.greenhouse.io board URL. Example: discord. A job URL returns 400.
     *   - keyword: Optional. Case-insensitive filter on title and location. Example: policy. Omit it to list the whole board.
     *   - page: Optional. Page number from 1. Example: 2. Defaults to 1. Page size is 20.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function greenhouseSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('greenhouse_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * GSA eLibrary Contract. Read one GSA eLibrary contractor record from the contract URL returned by search. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/gsaelibrary/contract`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. The contractorInfo.do URL from a search contract row. A contract number is also accepted, but GS-07F-0239T alone currently returns 404 because GSA ne…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function gsaelibraryContract(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('gsaelibrary_contract', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * GSA eLibrary Search. Search GSA eLibrary for schedule, SIN, and contract rows by keyword or by a full search URL. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/gsaelibrary/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. A keyword, or a full search URL on gsaelibrary.gsa.gov. The URL must contain searchResults.do or searchText=.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function gsaelibrarySearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('gsaelibrary_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Homestra Ad. Retrieve detailed property listing data from Homestra, including price, size, location, features, photos, and nearby properties. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/homestra/ad`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A Homestra property URL or slug.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function homestraAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('homestra_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Homestra Search. Search Homestra property listings using a direct search URL with filters, returning structured results with prices, sizes, locations, and photos. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/homestra/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A valid Homestra search URL with optional filters.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function homestraSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('homestra_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Hugging Face Model. Read one public Hugging Face model by an id such as google-bert/bert-base-uncased. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/huggingface/model`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. A public model id (owner/name) or a huggingface.co model URL. Reserved site paths such as models, datasets, or spaces return 400.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function huggingfaceModel(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('huggingface_model', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Hugging Face Search. Search the public Hugging Face models API by keyword and follow pagination.next to the next cursor page. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/huggingface/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. A model keyword, a huggingface.co/models URL, or the full pagination.next cursor URL from a previous page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function huggingfaceSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('huggingface_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Idealista Property. Extract full property details from an Idealista listing URL, including price, specs, photos by room, features, energy rating, and advertiser data. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/idealista/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Idealista property detail URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function idealistaProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('idealista_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Idealista Provinces. List the 50 Spanish provinces Idealista shows for homes for sale. Each row includes the sale search URL to pass as query to Idealista Search. Madrid is madrid-provincia. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/idealista/provinces`
     *
     * @param array{fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function idealistaProvinces(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('idealista_provinces', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Idealista Search. Search Idealista listings from a search URL and retrieve prices, specs, photos, agency info, and pagination. Pass a province URL from /v2/idealista/provinces (results[].url) as query. Madrid is `https://www.idealista.com/venta-vivien… Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/idealista/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Idealista search results URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function idealistaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('idealista_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Idealo Product. Get an Idealo product from Spain, France, or Germany. URL or product id. Offers, shipping, specs, and images via WebUnlocker (3 credits). Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/idealo/product`
     *
     * @param array{query: string, country?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Idealo product URL, or a numeric product id.
     *   - country: Region when query is a numeric product id.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function idealoProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('idealo_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Idealo Search. Search Idealo Spain, France, and Germany. Keyword or search URL. Prices, shipping, ratings, and pagination via WebUnlocker (3 credits). Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/idealo/search`
     *
     * @param array{query: string, country?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or full Idealo search URL for Spain, France, or Germany.
     *   - country: Region when query is a keyword.
     *   - page: Search page. 2 appends ?page=2.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function idealoSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('idealo_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * IKEA Product. Extract full IKEA product details from a product URL, including price, gallery, variants, dimensions, and breadcrumb. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/ikea/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full IKEA product page URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function ikeaProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('ikea_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * IKEA Search. Search IKEA products from a search URL and retrieve prices, ratings, dimensions, images, and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/ikea/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full IKEA search URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function ikeaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('ikea_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ImmobilienScout24 Property. Read one ImmobilienScout24 expose by URL or numeric id. You get cold rent or purchase price, address, and area. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/immobilienscout24/property`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The expose id, or the expose page URL.
     *   - return_page_source: When true, return the raw HTML in result instead of the parsed expose.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function immobilienscout24Property(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('immobilienscout24_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ImmobilienScout24 Search. Search ImmobilienScout24 by region and property type. real_estate_type covers rent, buy, house, and land. Page with pagenumber. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/immobilienscout24/search`
     *
     * @param array{query: string, real_estate_type?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Where to search.
     *   - real_estate_type: Rent or buy.
     *   - page: Page number, starting at 1.
     *   - return_page_source: When true, return the raw HTML in result instead of the parsed JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function immobilienscout24Search(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('immobilienscout24_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ImmoScout24 Switzerland Search. Search ImmoScout24.ch listings by city or search URL and retrieve the CHF price, rooms, living area, and address. Property pages are not available. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/immoscout24ch/search`
     *
     * @param array{query: string, offer_type?: string, property_type?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Swiss city or a full ImmoScout24.ch search URL.
     *   - offer_type: rent or buy.
     *   - property_type: apartment, house, or all.
     *   - page: Page from 1.
     *   - return_page_source: Optional. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function immoscout24chSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('immoscout24ch_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Immowelt Property. Extract full property details from an Immowelt listing URL, including price, specs, photo gallery, energy certificate, location, and contact data. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/immowelt/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Immowelt property detail URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function immoweltProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('immowelt_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Immowelt Search. Search Immowelt listings from a search URL and retrieve prices, specs, photos, agency info, and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/immowelt/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Immowelt search URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function immoweltSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('immowelt_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ImoveisWeb Property. Read one Imobiliária Aquários listing from its imoveisweb.com.br URL. price_display is rebuilt from the asking amount. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/imoveisweb/property`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Listing URL from search.
     *   - return_page_source: Optional. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function imoveiswebProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('imoveisweb_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ImoveisWeb Search. Search the Imobiliária Aquários catalog on imoveisweb.com.br. Pass a catalog name such as casas. price_display is rebuilt from the asking amount. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/imoveisweb/search`
     *
     * @param array{query: string, property_type?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Catalog name or an ImoveisWeb results URL. This is Imobiliária Aquários, not ZonaProp.
     *   - property_type: Optional catalog when query is not already a catalog name.
     *   - page: Page from 1.
     *   - return_page_source: Optional. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function imoveiswebSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('imoveisweb_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Indeed Company Info. Indeed Company Info API. Full employer profile by slug or URL. Browser rendering returns headcount, revenue, industry and FAQ or review blocks. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/indeed/company/info`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Indeed company slug or full /cmp/ URL.
     *   - return_page_source: When true, return the raw HTML as {\"result\": \"...\"} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function indeedCompanyInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('indeed_company_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Indeed Company Search. Indeed Company Search API. Search fr.indeed.com employer profiles by keyword or URL. Browser rendering returns ratings, industry and profile links. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/indeed/company/search`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Company keyword or full Indeed companies search URL.
     *   - return_page_source: When true, return the raw HTML as {\"result\": \"...\"} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function indeedCompanySearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('indeed_company_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Indeed Job Info. Indeed Job Info API. Fetch a full job posting by viewjob URL, sponsored click URL or job key. Browser rendering returns description and structured salary. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/indeed/job/info`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Indeed job URL, sponsored SERP click URL or 16-char jk job key.
     *   - return_page_source: When true, return the raw HTML as {\"result\": \"...\"} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function indeedJobInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('indeed_job_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Indeed Job Salary. Indeed Job Salary API. Career salary aggregates by job title slug or URL. Browser rendering returns median, percentiles and top paying cities. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/indeed/job/salary`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Career salary slug, full /career/.../salaries URL or slug|location pair.
     *   - return_page_source: When true, return the raw HTML as {\"result\": \"...\"} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function indeedJobSalary(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('indeed_job_salary', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Indeed Job Search. Indeed Job Search API. Search fr.indeed.com job listings by keyword or URL. Browser rendering returns cards with salary snippets and pagination. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/indeed/job/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword, Indeed /jobs URL or SEO search URL on fr.indeed.com (default domain).
     *   - page: 1-based page number (10 results per page). Default: 1.
     *   - return_page_source: When true, return the raw HTML as {\"result\": \"...\"} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function indeedJobSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('indeed_job_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Inet Product. Read one Inet.se product by article number or URL, including SEK price, specs, and warehouse stock. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/inet/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Article number or product URL. Example: 4306287. A search link returns 400.
     *   - return_page_source: Set to true to get the raw HTML in result.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function inetProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('inet_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Inet Search. Search Inet.se by keyword or category. Prices are inc-VAT SEK, with the next page URL when more results exist. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/inet/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): What to look for. A word such as ssd, or an Inet search or category link. A product link returns 400.
     *   - page: Page number, starting at 1. Page 2 uses page=2.
     *   - return_page_source: Set to true to get the raw HTML in result.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function inetSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('inet_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Instagram Post Info. Monitor competitors and market trends by scraping Instagram posts for valuable data. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/instagram/post/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The Instagram post or reel to retrieve. Accepts a full URL or a shortcode.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function instagramPostInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('instagram_post_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Instagram User Info. Gather user insights efficiently from Instagram for targeted marketing strategies. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/instagram/user/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The Instagram user to look up. Accepts a full profile URL or a username.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function instagramUserInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('instagram_user_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Intermarché Product. Get an Intermarché product sheet for a store (shop_id). Try an EAN or product URL with shop_id=11301. 3 credits per call. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/intermarche/product`
     *
     * @param array{query: string, shop_id: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Intermarché product URL, or an EAN barcode.
     *   - shop_id (required): Intermarché store id. Resolve a city with the [Stores Finder](https://www.piloterr.com/library/finder-intermarche-stores) (for example query=Paris).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function intermarcheProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('intermarche_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Intermarché Search. Search Intermarché products for a store (shop_id). Try query=lait and shop_id=11301. 3 credits per call. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/intermarche/search`
     *
     * @param array{query: string, shop_id: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full Intermarché search URL.
     *   - shop_id (required): Intermarché store id. Resolve a city with the [Stores Finder](https://www.piloterr.com/library/finder-intermarche-stores) (for example query=Paris).
     *   - page: Page number starting at 1. Use pagination.total_pages from a previous response to iterate.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function intermarcheSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('intermarche_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Intersport Product. Read one Intersport product from its URL. You get price, brand, and the product details. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/intersport/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL on intersport.fr, or a root-relative path ending in -p-{id}.
     *   - return_page_source: When true, returns the raw HTML instead of the parsed JSON. The response shape is {"result": "<html>..."}. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function intersportProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('intersport_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Intersport Search. Search Intersport by keyword and page the sports grid. Cards include title, price, and product link. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/intersport/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or an intersport.fr listing URL. A product URL returns 400.
     *   - page: Page number, from 1. Default is 1. Intersport's page query is zero-based, so page 2 is sent as page=1.
     *   - return_page_source: When true, returns the raw HTML instead of the parsed JSON. The response shape is {"result": "<html>..."}. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function intersportSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('intersport_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * JamesEdition Property. Read one JamesEdition listing from its URL. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/jamesedition/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. JamesEdition listing URL, for example https://www.jamesedition.com/real_estate/munich-germany/alpine-panorama-above-lake-starnberg-new-build-project-…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function jameseditionProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('jamesedition_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * JamesEdition Search. Search JamesEdition luxury homes by keyword or by a results URL. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/jamesedition/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Keyword, for example villa, or a JamesEdition results URL such as https://www.jamesedition.com/real_estate/france. A single listing URL is rejected.
     *   - page: Optional. Page number starting at 1. Example: 2. Omitted means page 1. A page already present in a results URL is kept when this is omitted or 1.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function jameseditionSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('jamesedition_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Jobs. Poll the status, progress (0–100) and result of a job started with is_async=true. Polling is free. Poll until status is terminal: CompletedJob, Error, NotFound or BadRequest.
     *
     * `GET /v1/jobs/{id}`
     *
     * @param array{id: string} $params
     *   - id (required): The job_id returned by an endpoint called with is_async=true.
     */
    public function jobs(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('jobs', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Kick User Info. Retrieve complete public channel data from Kick including streamer profile, follower count, live status, and recent categories. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/kick/user/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The Kick channel to look up. Accepts a full channel URL or a username/slug.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function kickUserInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('kick_user_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Kijiji Ad. Read one Kijiji ad from its id or URL. You get the asking price, the title, and the city. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/kijiji/ad`
     *
     * @param array{query: string, language?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Kijiji listing URL or the numeric listing id.
     *   - language: Locale sent to Kijiji as the siteLocale cookie. en sets en-CA and prints $20. fr sets fr-CA and prints 20 $ on the same ad.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function kijijiAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('kijiji_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Kijiji Search. Search Kijiji with a results URL or a city and category. Language can be English or French. Page through classified ads. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/kijiji/search`
     *
     * @param array{query: string, page?: int|float, language?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or full Kijiji results URL.
     *   - page: Results page, starting at 1. Page 2 of the City of Toronto bikes search returns a different set of listing ids. When page stays at 1, a page-N segment already…
     *   - language: Locale sent to Kijiji as the siteLocale cookie. en sets en-CA. fr sets fr-CA. French cards print prices like 10,00 $.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function kijijiSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('kijiji_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Kroger Product. Read one Kroger product by UPC. The sheet uses the same default store as search. You get the shelf price and the previous price when Kroger shows one. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/kroger/product`
     *
     * @param array{query: string, location_id?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Kroger product URL or UPC.
     *   - location_id: Ignored. Prices stay on the default Rolla store, 02100537 (Kroger, 605 W 4th St, Rolla, MO 65401). The response location_id is the store that was actually pric…
     *   - return_page_source: When true, return rendered HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function krogerProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('kroger_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Kroger Search. Search Kroger groceries by keyword and page the results. Prices come from the default pickup store returned in the response. A location id you pass is not applied. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/kroger/search`
     *
     * @param array{query: string, page?: int|float, location_id?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or a full Kroger search URL.
     *   - page: Page number, 1-based.
     *   - location_id: Ignored. Prices stay on the default Rolla store, 02100537 (Kroger, 605 W 4th St, Rolla, MO 65401). The response location_id is the store that was actually pric…
     *   - return_page_source: When true, return rendered HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function krogerSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('kroger_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Lamudi Ad. Get a full Lamudi listing by URL: price, area, amenities, coordinates, images, and agent (browser rendering, 2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/lamudi/ad`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Lamudi listing URL. Accepts lamudi.com.ph (/property/) and lamudi.co.id (/properti/).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function lamudiAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('lamudi_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Lamudi Search. Search Lamudi Philippines and Indonesia listings. Pass a search URL in query, or use location and filters. Prices, area, rooms, tags, and pagination via browser rendering (2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/lamudi/search`
     *
     * @param array{query?: string, location?: string, operation?: string, property_type?: string, min_price?: int|float, max_price?: int|float, min_bedrooms?: int|float, max_bedrooms?: int|float, min_bathrooms?: int|float, min_area?: int|float, max_area?: int|float, sort?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query: Full Lamudi search URL. Used first when set. Location and path filters are ignored.
     *   - location: City or district. Used when query is empty. Builds a Philippines URL (lamudi.com.ph). For Indonesia, pass a search URL in query.
     *   - operation: Transaction type. Used when query is empty.
     *   - property_type: Property type. Used when query is empty. Maps to Lamudi slugs (condominium → /condo/, land → /lot/).
     *   - min_price: Minimum asking price in PHP or IDR.
     *   - max_price: Maximum asking price in PHP or IDR.
     *   - min_bedrooms: Minimum bedroom count.
     *   - max_bedrooms: Maximum bedroom count.
     *   - min_bathrooms: Minimum bathroom count.
     *   - min_area: Minimum area in m².
     *   - max_area: Maximum area in m².
     *   - sort: Sort order.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function lamudiSearch(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('lamudi_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Leboncoin Ad. Extract full details from a Leboncoin ad including price, location, attributes, seller info, and images. Returns structured JSON by default, or raw HTML on demand. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/leboncoin/ad`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Leboncoin ad ID or full ad URL. Both formats are accepted regardless of return_page_source.
     *   - return_page_source: Controls the response format.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function leboncoinAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('leboncoin_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Leboncoin Search. Scrape Leboncoin search results or category pages by URL, returning paginated listings with price, location, and attributes. Returns structured JSON. return_page_source is deprecated and returns 400. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/leboncoin/search`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Leboncoin search or category URL. Both keyword searches and category browse URLs are supported.
     *   - return_page_source: Deprecated. Sending true returns 400.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function leboncoinSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('leboncoin_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Leboncoin Search API. Search Leboncoin listings via structured POST API with advanced filters for category, location, price range, seller type, and sorting. Credit cost: 1 credit per call.
     *
     * `POST /v2/leboncoin/search_api`
     *
     * @param array{fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function leboncoinSearchApi(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('leboncoin_search_api', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Lenovo Product. Extract a Lenovo product page by URL: id, name, price, currency, availability, images, and description (browser rendering, 2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/lenovo/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Lenovo product URL (must contain /p/). Bare part numbers are rejected.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function lenovoProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('lenovo_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Lenovo Search. Search Lenovo products by keyword or listing URL. Returns product id, price, currency, series, and availability via browser rendering (2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/lenovo/search`
     *
     * @param array{query: string, locale?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or full Lenovo search / category URL.
     *   - locale: Store locale when query is a keyword (ignored for full URLs).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function lenovoSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('lenovo_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Leroy Merlin Product. Live Leroy Merlin product detail for France and Romania from a URL or identifier: offers, currency, images, features and store context. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/leroymerlin/product`
     *
     * @param array{query: string, region?: string, store_id?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Leroy Merlin product URL, or an identifier (SKU / EAN / text).
     *   - region: Leroy Merlin country when query is a keyword or identifier (default: fr). Ignored when query is a full Leroy Merlin URL (country is detected from the domain).
     *   - store_id: Optional store id for local offer context (prices, stock, deliveries). Must exist for the active region. Returns 400 when unknown.
     *   - return_page_source: When set to true, returns the raw HTML of the product page instead of the parsed JSON payload. Useful for debugging or custom parsing. The response shape is {"…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function leroymerlinProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('leroymerlin_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Leroy Merlin Search. Live Leroy Merlin search across France and Romania: title, URL, price, currency, brand, seller, rating and pagination. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/leroymerlin/search`
     *
     * @param array{query: string, region?: string, page?: int|float, store_id?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword, SKU/EAN, or full Leroy Merlin search URL.
     *   - region: Leroy Merlin country when query is a keyword or identifier (default: fr). Ignored when query is a full Leroy Merlin URL (country is detected from the domain).
     *   - page: 1-based page number for pagination. Defaults to 1 when omitted. Use the pagination.total_pages returned by a previous call to iterate.
     *   - store_id: Optional store id for local prices and availability. Must exist for the active region (FR stores with region=fr, RO stores with region=ro). Returns 400 when un…
     *   - return_page_source: When set to true, returns the raw HTML of the page instead of the parsed JSON payload. Useful for debugging or custom parsing. The response shape is {"return":…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function leroymerlinSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('leroymerlin_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Lidl Product. Lidl Product API: fetch full product page data from a Lidl URL or ERP id. Returns pricing, images, description, availability and category via Nuxt SSR parsing. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/lidl/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Lidl product URL or ERP id.
     *   - region: Target country when query is an ERP id only (default: fr). Ignored for full product URLs.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function lidlProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('lidl_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Lidl Search. Lidl Search API: search product listings by keyword or URL across Lidl online shops in 27 countries. Parses Nuxt SSR payload from HTML; returns prices, ratings, brand and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/lidl/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full Lidl search URL.
     *   - region: Target country when query is a keyword (default: fr).
     *   - page: 1-based page number (default: 1). Lidl paginates by offset (48 items per page).
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function lidlSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('lidl_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LinkedIn Company Info. LinkedIn Company Info API. Fetch firmographics by LinkedIn slug, URL, company ID, or reverse domain lookup (guideflow.com). Industry, headcount, HQ, posts, and more. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/linkedin/company/info`
     *
     * @param array{query?: string, domain?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query: LinkedIn company identifier when you already know the page.
     *   - domain: Company website domain for reverse lookup when you do not have the LinkedIn URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function linkedinCompanyInfo(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('linkedin_company_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LinkedIn Job Count. Obtain real-time job counts on LinkedIn by industry, region, and role for strategic planning. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/linkedin/job/count`
     *
     * @param array{keyword?: string, experience_level?: string, job_type?: string, when?: string, flexibility?: string, distance?: int|float, geo_id?: string, company_id?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - keyword: Job title or keyword to count matching postings.
     *   - experience_level: Filter by seniority level.
     *   - job_type: Filter by employment type.
     *   - when: Filter by posting recency.
     *   - flexibility: Filter by work arrangement.
     *   - distance: Maximum distance radius (in miles) from the target location (requires geo_id).
     *   - geo_id: LinkedIn geo ID of the target location.
     *   - company_id: LinkedIn numeric company ID to restrict the count to jobs posted by a specific company.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function linkedinJobCount(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('linkedin_job_count', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LinkedIn Job Info. Dive into LinkedIn job data and trends for in-depth labor market insights. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/linkedin/job/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The LinkedIn job posting to retrieve. Accepts a numeric job ID or a full job posting URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function linkedinJobInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('linkedin_job_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LinkedIn Job Search. Experience advanced job data extraction from LinkedIn, enhancing your recruitment strategy. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/linkedin/job/search`
     *
     * @param array{keyword?: string, experience_level?: string, job_type?: string, when?: string, flexibility?: string, distance?: int|float, geo_id?: string, company_id?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - keyword: Job title or keyword to search for.
     *   - experience_level: Filter by seniority level.
     *   - job_type: Filter by employment type.
     *   - when: Filter by posting date recency.
     *   - flexibility: Filter by work arrangement.
     *   - distance: Maximum radius in miles from the target location (requires geo_id).
     *   - geo_id: LinkedIn geo ID for the target location. Default is 92000000 (worldwide).
     *   - company_id: LinkedIn numeric company ID to filter results to jobs posted by a specific company.
     *   - page: Page number for paginating through results. Default is 1. Each page returns up to 25 job listings.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function linkedinJobSearch(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('linkedin_job_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LinkedIn Job Suggest. Get personalized job suggestions based on keywords or locations to streamline your job search. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/linkedin/job/suggest`
     *
     * @param array{query: string, location?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The keyword prefix to search for job title suggestions or location names.
     *   - location: Set to true to receive location (geo) suggestions instead of keyword suggestions.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function linkedinJobSuggest(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('linkedin_job_suggest', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LinkedIn Post Info. Simplify LinkedIn post retrieval with our efficient API for enhanced content analysis. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/linkedin/post/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The LinkedIn post to retrieve. Accepts a numeric post ID or a full post URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function linkedinPostInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('linkedin_post_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LinkedIn Product Info. Gain competitive insights with detailed LinkedIn product information for strategic advantage. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/linkedin/product/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The full LinkedIn product page URL to retrieve.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function linkedinProductInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('linkedin_product_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LinkedIn Profile Info. Streamline recruitment and business development by extracting valuable LinkedIn profile insights. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/linkedin/profile/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The LinkedIn profile to retrieve. Accepts a username, full profile URL, or numeric member ID.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function linkedinProfileInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('linkedin_profile_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LinkedIn Ad Library Ad. Get one LinkedIn Ad Library creative by URL or id: copy, CTA, payer, impressions, and targeting (2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/linkedinadlibrary/ad`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Ad id or detail URL from search.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function linkedinadlibraryAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('linkedinadlibrary_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LinkedIn Ad Library Search. Search the LinkedIn Ad Library by advertiser, keyword, country, and date. Returns ad cards and pagination (2 credits). Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/linkedinadlibrary/search`
     *
     * @param array{query?: string, account_owner?: string, keyword?: string, countries?: string, date_option?: string, start_date?: string, end_date?: string, cursor?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query: Full LinkedIn Ad Library search URL, or a keyword when account_owner is empty.
     *   - account_owner: Advertiser / company name filter (accountOwner).
     *   - keyword: Keyword filter on ad copy.
     *   - countries: Comma-separated ISO country codes, or ALL.
     *   - date_option: Date window: last-30-days, current-month, current-year, last-year, custom-date-range.
     *   - start_date: Start date YYYY-MM-DD when date_option=custom-date-range.
     *   - end_date: End date YYYY-MM-DD when date_option=custom-date-range.
     *   - cursor: Opaque cursor from pagination.cursor / pagination.next.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function linkedinadlibrarySearch(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('linkedinadlibrary_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LoopNet Property. Read one LoopNet commercial listing from its URL. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/loopnet/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. LoopNet listing URL from search, for example https://www.loopnet.com/Listing/484-Amsterdam-Ave-New-York-NY/31379002/. A keyword is rejected.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function loopnetProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('loopnet_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * LoopNet Search. Search LoopNet commercial listings by city or by a results URL. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/loopnet/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. City and state, for example New York, NY, or a LoopNet search URL such as https://www.loopnet.com/search/commercial-real-estate/new-york-ny/for-sale/…
     *   - page: Optional. Page number starting at 1. Example: 2. Omitted means page 1. A page already present in a search URL is kept when this is omitted or 1.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function loopnetSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('loopnet_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Maersk Tracking. Track a Maersk container or BOL: origin, destination, current milestone and full transport-plan events via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/maersk/tracking`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Container / BOL tracking number, or full Maersk tracking URL.
     *   - return_page_source: When true, return the rendered HTML as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function maerskTracking(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('maersk_tracking', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ManoMano Product. Read a ManoMano product URL. The body is the product page: brand and seller are objects, and the current price is price.primary_price.amount_with_vat. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/manomano/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full ManoMano product page URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function manomanoProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('manomano_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ManoMano Product Offer. List the other sellers for a ManoMano product id. Each offer adds price and price_display on top of the site offer. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/manomano/product/offer`
     *
     * @param array{query: string, region?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Numeric ManoMano product id from the product endpoint.
     *   - region: ManoMano country. FR, GB, DE, ES, or IT. Default FR.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function manomanoProductOffer(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('manomano_product_offer', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ManoMano Search. Read a ManoMano category URL or keyword. Each card keeps the site fields and adds prices.main, brand_name, and image_fullpath. pagination.next is a boolean. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/manomano/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): ManoMano category URL or keyword. A keyword is opened on manomano.fr.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function manomanoSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('manomano_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Mascus Ad. Get full details for a Mascus used equipment listing: specs, price, seller and description. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/mascus/ad`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Mascus listing URL. Usually taken from results[].url in search.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function mascusAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('mascus_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Mascus Search. Search used equipment listings on Mascus from a category URL, with pagination that keeps country and category filters. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/mascus/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Mascus category or search URL. The country site comes from the host (mascus.be, mascus.nl, mascus.de, mascus.com, …).
     *   - page: Page number (default: 1). About 40 results per page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function mascusSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('mascus_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * MediaMarkt Product. Read one MediaMarkt product by id or product URL, in the region you choose. You get price, currency, EAN, and availability. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/mediamarkt/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL or article id.  https://www.mediamarkt.ch/fr/product/_apple-iphone-15-2203371.html
     *   - region: Shop code when query is an article id. Example: ch-fr. Default ch-fr.
     *   - return_page_source: When true, return raw HTML as {"result": "..."}.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function mediamarktProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('mediamarkt_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * MediaMarkt Search. Search a MediaMarkt shop by keyword. Set region for Switzerland, Germany, Austria, and the other MediaMarktSaturn countries, then page the results. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/mediamarkt/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or MediaMarkt URL. Example: iphone
     *   - region: Shop code. Example: ch-fr or de. Default ch-fr. Ignored when query is a full URL.
     *   - page: Page number from 1. Example: 1
     *   - return_page_source: When true, return raw HTML as {"result": "..."}.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function mediamarktSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('mediamarkt_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Micromania Product. Read one Micromania product from its URL or product id. You get the price, brand, EAN, platform, and stock. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/micromania/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL or the numeric Micromania id. A keyword or a search URL returns 400.
     *   - return_page_source: When true, returns the raw HTML instead of the parsed JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function micromaniaProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('micromania_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Micromania Search. Search Micromania for a keyword or a Search-Show URL. Each card has the product id, name, brand, EAN, price, and stock. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/micromania/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or a Micromania Search-Show URL. A product URL returns 400.
     *   - page: Page number, from 1. Default is 1. Page 2 is sent as page=2.
     *   - return_page_source: When true, returns the raw HTML instead of the parsed JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function micromaniaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('micromania_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Mobile Ad. Mobile Ad API. Fetch full car listing data from a mobile.de ad URL or numeric id. Returns pricing, specs, images and features via webunlocker. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/mobile/ad`
     *
     * @param array{query: string, locale?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Mobile ad URL or numeric ad id.
     *   - locale: Language for this ad. The same numeric id stays reachable for fr, es, de, and en.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function mobileAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('mobile_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Mobile Search. Mobile Search API. Same mobile.de inventory for every locale. locale sets the language label and ad links, not which cars are returned. (3 credits) Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/mobile/search`
     *
     * @param array{query: string, locale?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search URL or make/model code (ms=).
     *   - locale: Locale label for the results. The cars themselves stay the same for de, fr, and en.
     *   - page: Page number, starting at 1. Same effect as page or pageNumber in the Mobile.de URL.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function mobileSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('mobile_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Morele Product. Read one morele.net product page. Flat JSON with PLN price, EAN, specs, and availability. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/morele/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Morele product URL, or a numeric product id.
     *   - return_page_source: When true, return the raw HTML as {"result": "..."}.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function moreleProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('morele_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Morele Search. Search morele.net by keyword or search URL. Returns product cards with PLN prices and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/morele/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or a full Morele search URL. A product URL is rejected.
     *   - page: Page number starting at 1. Page 2 asks Morele for the next screen of the same search.
     *   - return_page_source: When true, return the raw HTML as {"result": "..."}.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function moreleSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('morele_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Mr.Bricolage Suggest. Live Mr.Bricolage product suggestions for a search keyword or EAN, including title, URL, image, price and currency. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/mrbricolage/suggest`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or EAN used to query the Mr.Bricolage live suggest endpoint. Accepts product names, partial titles or numeric identifiers such as EAN barcodes.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function mrbricolageSuggest(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('mrbricolage_suggest', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Newegg Product. Read a Newegg product from an item number, catalog id, or URL. Returns price, specs, images, and seller. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/newegg/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Item number, catalog id, or product URL.
     *   - return_page_source: When true, return the raw HTML. The string false stays false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function neweggProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('newegg_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Newegg Search. Search Newegg by keyword or search URL. Returns item numbers, dollar prices, stock, and pagination. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/newegg/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or a newegg.com search URL.
     *   - page: Page number, starting at 1. Example: 2.
     *   - return_page_source: When true, return the raw HTML. The string false stays false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function neweggSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('newegg_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * North Data Company. North Data company profile: register, address, financials and history (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/northdata/company`
     *
     * @param array{query: string, countries?: string, domain?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Company name, North Data id, or a profile URL.
     *   - countries: ISO alpha-2, used only when query is a name. Same form as search: FR or FR,DE.
     *   - domain: fr (default), com or en, de. Ignored when query is a URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function northdataCompany(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('northdata_company', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * North Data Search. Search North Data companies and people by name. Returns suggestion cards and pagination (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/northdata/search`
     *
     * @param array{query: string, countries?: string, domain?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Company or person name, or a North Data suggest URL.
     *   - countries: ISO alpha-2 codes, separated by comma, pipe or space (FR or FR,DE). Empty searches every country. A URL that already has countries wins.
     *   - domain: Host of a name: fr (default), com or en, de. Ignored when query is a URL.
     *   - page: Only 1. Below 1 returns 400. Above 1 returns 404. At most 15 rows.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function northdataSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('northdata_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * NPI Provider. Fetch one NPPES provider or organization by 10-digit NPI or provider-view URL, including addresses and taxonomies. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/npi/provider`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. 10-digit NPI, example 1972813608, or a provider-view URL such as https://npiregistry.cms.hhs.gov/provider-view/1972813608.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function npiProvider(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('npi_provider', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * NPI Search. Search the NPPES NPI registry by person name, organization, or 10-digit NPI. With NPI-2, a text query is the organization name. total_results is null, and next is set only when the page is full. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/npi/search`
     *
     * @param array{query?: string, first_name?: string, last_name?: string, organization_name?: string, city?: string, state?: string, postal_code?: string, taxonomy?: string, enumeration_type?: string, page?: int|float, limit?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query: Optional when another criterion is set. Example: Anthony Fauci. Also a 10-digit NPI such as 1972813608, or an NPPES search URL. With enumeration_type=NPI-2 thi…
     *   - first_name: Optional. Example: Anthony. Used as the given name when you do not want query to be split.
     *   - last_name: Optional. Example: Fauci. A single-word query such as Smith is used as the last name.
     *   - organization_name: Optional. Example: Mayo Clinic. You can also pass that name in query with enumeration_type=NPI-2.
     *   - city: Optional. Practice city. Example: Washington.
     *   - state: Optional. Two-letter state code. Example: DC. Any other value is rejected.
     *   - postal_code: Optional. Postal code. Example: 20016.
     *   - taxonomy: Optional. Taxonomy description. Example: Internal Medicine.
     *   - enumeration_type: Optional. NPI-1 for a person or NPI-2 for an organization. Example: NPI-2. NPI-2 treats a text query as an organization name.
     *   - page: Optional. Page number, starting at 1. Example: 2. Defaults to 1.
     *   - limit: Optional. Page size. Example: 10. Defaults to 10 and cannot exceed 200. next is a URL only when the page contains this many rows.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function npiSearch(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('npi_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Oceanio Search. Search Ocean.io by domain or company name to find the matching company, similar companies, contacts, and people. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/oceanio/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Domain or company name.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function oceanioSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('oceanio_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * OLX Ad. Read one OLX ad from its id or URL. You get the asking price, the city, and the seller name. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/olx/ad`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): OLX listing URL.
     *   - region: Ignored when query is a full URL. The host selects the country.
     *   - return_page_source: When true, return raw HTML.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function olxAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('olx_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * OLX Product. Read one OLX ad from its id or URL. You get the asking price, the city, and the seller name. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/olx/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full URL of the OLX listing page to retrieve. Must be a valid olx.com.br listing URL. Example 1:
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function olxProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('olx_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * OLX Search. Search OLX Brazil classifieds by keyword and get title, price, location, seller type, and condition as structured JSON in real time. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/olx/search`
     *
     * @param array{query: string, category?: string, state?: string, city?: string, min_price?: int|float, max_price?: int|float, seller_type?: string, sort?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or phrase, as you would type it in the OLX search bar. Supports Portuguese terms for Brazilian inventory.
     *   - category: OLX category slug to restrict results to a specific vertical. Common values:
     *   - state: Brazilian state abbreviation to filter results geographically.
     *   - city: City slug to narrow results to a specific municipality. Use lowercase with hyphens.
     *   - min_price: Minimum listing price in BRL.
     *   - max_price: Maximum listing price in BRL.
     *   - seller_type: Filter by seller type.
     *   - sort: Sort order for results.
     *   - page: Page number for paginated results. Default: 1.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function olxSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('olx_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Oscaro Product. Oscaro Product API. Fetch full auto parts product data from an Oscaro product URL. Returns pricing, brand, reference, images and availability via browser rendering and JSON-LD parsing. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/oscaro/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Oscaro product page URL (*-{sku}-p suffix).
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function oscaroProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('oscaro_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Oscaro Search. Oscaro Search API. Search auto parts by keyword, search URL or category listing on oscaro.com, oscaro.es and oscaro.pt. Returns prices and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/oscaro/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword, search URL, or category listing URL (*-{id}-g).
     *   - region: Target shop when query is a keyword (default: com).
     *   - page: 1-based page number override for category listing URLs (default: read from URL or 1). Uses ?page=2 on *-g pages.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function oscaroSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('oscaro_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Ovoko Ad. Extract an Ovoko listing from a SKU URL: price, currency, images, seller, quality, vehicle make, part numbers, and warranty. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/ovoko/ad`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Ovoko listing URL. The last path segment must be a SKU slug (example: qbb17557-95c827460c-porsche-macan-...) or a known product prefix.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function ovokoAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('ovoko_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Ovoko Search. Search Ovoko used-parts listings from a search URL and retrieve title, price, OEM codes, seller, vehicle text, and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/ovoko/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Ovoko search URL. Only search pages are accepted (not category, catalog, or offer pages).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function ovokoSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('ovoko_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Owler Company Info. Retrieve detailed company intelligence from Owler, including revenue, employee count, CEO info, competitors, funding, and industry sectors. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/owler/company/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The company to look up on Owler. Multiple formats are accepted:
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function owlerCompanyInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('owler_company_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Owler Search. Search for companies on Owler by name or keyword, returning a list of matching companies with slugs, logos, domains, and profile URLs. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/owler/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The company name or keyword to search for on Owler.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function owlerSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('owler_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * PagesJaunes Page Info. Retrieve detailed business information from a PagesJaunes page, including contact details, opening hours, services, payment methods, and SIREN number. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/pagesjaunes/page/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A PagesJaunes business page URL or business ID.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function pagesjaunesPageInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('pagesjaunes_page_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * PagesJaunes Search. Search PagesJaunes for French local businesses by category and location, returning paginated results with contact details and ratings. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/pagesjaunes/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A valid PagesJaunes search URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function pagesjaunesSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('pagesjaunes_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Patreon Profile Info. Retrieve a Patreon creator profile with patron counts, membership tiers, campaign summary, and creator metadata. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/patreon/profile/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Patreon profile URL or creator vanity name.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function patreonProfileInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('patreon_profile_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Patreon Search. Search Patreon creators by keyword and retrieve campaign cards with patron counts, post counts, and profile URLs. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/patreon/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword to find Patreon creators.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function patreonSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('patreon_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * PetSmart Product. Read one PetSmart product URL, including the selected size, dollar price, flavor, and item number. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/petsmart/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A PetSmart product link.
     *   - return_page_source: Set to true to get the raw HTML in result instead of the parsed JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function petsmartProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('petsmart_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * PetSmart Search. Search PetSmart by keyword or search URL. Page through pet food, litter, and supplies with dollar prices. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/petsmart/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): What to look for. A word, or a PetSmart search link.
     *   - page: Which page of results, starting at 1. Page 2 returns a different set of products.
     *   - return_page_source: Set to true to get the raw HTML in result instead of the parsed JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function petsmartSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('petsmart_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Picard Product. Picard Product API. Fetch full frozen food product data from a Picard URL or reference. Returns pricing, images, description, Nutri-Score, Planet-Score, breadcrumb and reviews. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/picard/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Picard product URL or numeric reference.
     *   - return_page_source: When true, return the raw HTML as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function picardProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('picard_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Picard Search. Picard Search API. Search frozen food listings on picard.fr by keyword or URL. Parses SFCC Search-UpdateGrid HTML; returns prices, Nutri-Score, ratings and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/picard/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full Picard search URL.
     *   - page: 1-based page number (24 results per page via SFCC Search-UpdateGrid). Default: 1.
     *   - return_page_source: When true, return the raw HTML as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function picardSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('picard_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Pinterest User Info. Access Pinterest user profiles and analytics for targeted marketing and audience insights. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/pinterest/user/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): The Pinterest profile to retrieve. Accepts a full profile URL or a username.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function pinterestUserInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('pinterest_user_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * PitchBook Company Info. Get a PitchBook company profile: overview, funding, competitors and more via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/pitchbook/company/info`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): PitchBook company id or company profile URL.
     *   - return_page_source: When true, return rendered HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function pitchbookCompanyInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('pitchbook_company_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * PitchBook Search. Search PitchBook for companies, news and profiles by keyword or search URL via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/pitchbook/search`
     *
     * @param array{query: string, page?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or PitchBook search URL.
     *   - page: Page number for content search (/search?q=...).
     *   - return_page_source: When true, return rendered HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function pitchbookSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('pitchbook_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Point.P Product. Point.P Product API: scrape live /p/ product pages from a full URL. Get title, images, EAN, pricing, specifications, and breadcrumbs as JSON via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/pointp/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Point.P product page URL (/p/...-A{id}).
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of parsed JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function pointpProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('pointp_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Point.P Search. Point.P Search API: search by keyword or URL and get building-material listings with prices, brands, ratings, units, and pagination as JSON via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/pointp/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full Point.P search results URL.
     *   - page: 1-based page number for pagination. Overrides the page inferred from the URL. Defaults to 1 when omitted.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function pointpSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('pointp_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * PR Newswire Article. Read one PR Newswire press release from its URL. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/prnewswire/article`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. PR Newswire release URL, for example https://www.prnewswire.com/news-releases/pumpkin-awarded-11-000-in-donations-to-veterinary-clinics-for-cost-of-c…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function prnewswireArticle(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('prnewswire_article', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * PR Newswire Search. Search PR Newswire press releases by keyword or by a news-search URL. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/prnewswire/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Keyword, for example apple, or a PR Newswire news-search URL such as https://www.prnewswire.com/search/news/?keyword=apple. A release URL is rejected.
     *   - page: Optional. Page number starting at 1. Example: 2. Omitted means page 1. A page already present in a search URL is kept when this is omitted or 1.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function prnewswireSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('prnewswire_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ProductHunt Product Info. Retrieve product data from ProductHunt, including tagline, categories, screenshots, reviews rating, and social links. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/producthunt/product/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A ProductHunt product URL or product slug.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function producthuntProductInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('producthunt_product_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Proshop Product. Read one proshop.dk product page. Flat JSON with DKK price, EAN, specs, and stock text. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/proshop/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Proshop product id, or a product URL. The id is the last path segment.
     *   - return_page_source: When true, return the raw HTML as {"result": "..."}.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function proshopProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('proshop_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Proshop Search. Search proshop.dk by keyword or search URL. Returns product cards with DKK prices and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/proshop/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or a full Proshop search URL with s=. A product URL is rejected.
     *   - page: Page number starting at 1. Proshop sends this as pn.
     *   - return_page_source: When true, return the raw HTML as {"result": "..."}.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function proshopSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('proshop_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Rappi Product. Fetch one Rappi Mexico product, including the primary store price and the other store offers. The primary price can differ from a search card. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/rappi/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Product URL on rappi.com.mx, example https://www.rappi.com.mx/p/santa-clara-leche-deslactosada-semidescremada-1-l-14069, or a numeric master id such…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function rappiProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('rappi_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Rappi Search. Search Rappi Mexico on rappi.com.mx. The city resolves to Mexico City. Each row is one store offer, and next is null. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/rappi/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Keyword, example leche, or a rappi.com.mx search URL such as https://www.rappi.com.mx/search?query=leche. A product URL or another country host is re…
     *   - page: Optional. Only page 1 returns rows. Example: 1. Defaults to 1. Page 2 is rejected because the payload has no next page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function rappiSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('rappi_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Rate My Professors Professor. Read one Rate My Professors profile, including difficulty and would-take-again when the page shows them. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/ratemyprofessors/professor`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. The numeric professor id from search, or a /professor/{id} URL. A name is not accepted.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function ratemyprofessorsProfessor(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('ratemyprofessors_professor', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Rate My Professors Search. Search Rate My Professors by name. Cards include school, department, difficulty, and would-take-again when the card shows them. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/ratemyprofessors/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. A professor name, or a Rate My Professors search URL whose path contains /search/professors or whose query contains q=.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function ratemyprofessorsSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('ratemyprofessors_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * realestate.com.au Search. Search realestate.com.au buy, rent, or sold results. A place such as Sydney, NSW defaults to homes for sale. Each card has price, address, rooms, and a property URL. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/realestatecomau/search`
     *
     * @param array{query: string, channel?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Place or a realestate.com.au results URL.
     *   - channel: buy, rent, or sold. Used when query is a place.
     *   - page: Page from 1.
     *   - return_page_source: Optional. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function realestatecomauSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('realestatecomau_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Realtor Property. Extract full property details from a Realtor.com listing URL, including price, specs, photos, agents, features, and location data. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/realtor/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Realtor.com property detail URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function realtorProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('realtor_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Realtor Search. Search Realtor.com listings from a search URL and retrieve prices, beds, baths, sqft, photos, and property metadata. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/realtor/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Realtor.com search results URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function realtorSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('realtor_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Redfin Property. Read one for-sale Redfin home. Pass the url from search, which already includes the market id. The response is a flat listing, the same fields as one search result. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/redfin/property`
     *
     * @param array{query: string, region_id?: int|float, region_type?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Redfin home link. Use the url returned by search.
     *   - region_id: Market id. Required only when the home link does not already include region_id.
     *   - region_type: Required with region_id when the home link has no region_type.
     *   - return_page_source: Optional. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function redfinProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('redfin_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Redfin Search. Search for-sale homes on Redfin from a city, neighborhood, or county link. Each listing url includes the market id to pass to the property endpoint. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/redfin/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Redfin for-sale link for a city, neighborhood, or county.
     *   - page: Page of the for-sale feed, from 1.
     *   - return_page_source: Optional. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function redfinSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('redfin_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Reichelt Product. Read one reichelt.de product URL, including article number, EAN, and the euro price. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/reichelt/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A reichelt.de or reichelt.com product link. A search link returns 400.
     *   - return_page_source: Set to true to get the raw HTML in result.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function reicheltProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('reichelt_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Reichelt Search. Search reichelt.de by keyword or category. Euro prices are rebuilt from the number, including whole-euro amounts. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/reichelt/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): What to look for. A word such as 1n4148, or a reichelt.de search or category link. A product link returns 400.
     *   - page: Page number, starting at 1. Page 2 is PAGE=1 on the shop.
     *   - return_page_source: Set to true to get the raw HTML in result.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function reicheltSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('reichelt_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Reverb Product. Reverb Product API: fetch full listing data from a Reverb URL or listing id. Returns pricing, specs, images, description and shop info via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/reverb/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Reverb listing URL or numeric listing id.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function reverbProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('reverb_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Reverb Search. Reverb Search API: search music gear listings by keyword, query string or marketplace URL on Reverb. Returns prices, thumbnails and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/reverb/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword, query string, or full Reverb marketplace URL.
     *   - page: 1-based page number override (default: read from URL or 1).
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function reverbSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('reverb_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Rexel Product. Get a Rexel France product page: references, EAN, descriptions, images and specs via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/rexel/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Rexel France product URL containing /p/{id}.
     *   - return_page_source: When true, return rendered HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function rexelProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('rexel_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Rexel Search. Search Rexel France by keyword, EAN or search URL. Returns product cards and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/rexel/search`
     *
     * @param array{query: string, page?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword, EAN, or Rexel France search URL.
     *   - page: Page number (1-based). Page 1 omits page in the URL.
     *   - return_page_source: When true, return rendered HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function rexelSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('rexel_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Rightmove Property. Read one Rightmove property from its URL or numeric id. The response is a flat object with price, tenure, floor area, stations, and the agent. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/rightmove/property`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Rightmove property URL or the numeric id.
     *   - return_page_source: Optional. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function rightmoveProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('rightmove_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Rightmove Search. Search Rightmove by a UK place name or a search URL. Each card has a numeric price, a price label rebuilt from that number, the address, the agent, and a property URL. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/rightmove/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): UK place name or a Rightmove search URL.
     *   - page: Results page, from 1.
     *   - return_page_source: Optional. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function rightmoveSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('rightmove_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * RS Online Product. Read one RS Online UK product URL, including the RS stock number, manufacturer part, and pound price. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/rsonline/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A uk.rs-online.com product link. The response is one flat product. price is the numeric pound amount and price_display is the printed string. A search link, a…
     *   - return_page_source: Default false. true replaces the product object with result, the rendered HTML.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function rsonlineProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('rsonline_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * RS Online Search. Search RS Online UK by keyword or category. Pound prices keep the amount printed on the page. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/rsonline/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A keyword, or a uk.rs-online.com search or category link. Empty, another host, or a product link returns 400. A keyword builds /web/c/?searchTerm=... and page…
     *   - page: Page number starting at 1. Omit it for page 1. Page 2 sets pn=2, changes pagination.page, and returns the next cards. pagination.next is that next URL, or null…
     *   - return_page_source: Default false. true replaces results and pagination with result, the rendered HTML.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function rsonlineSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('rsonline_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * SEEK Job. Read one SEEK Australia job from its URL or numeric id. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/seek/job`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. SEEK job URL or numeric id, for example 95568355 or https://www.seek.com.au/job/95568355. A keyword is rejected.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function seekJob(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('seek_job', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * SEEK Search. Search SEEK Australia jobs by keyword or by a results URL. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/seek/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Job keyword, for example nurse, or a SEEK results URL such as https://www.seek.com.au/nurse-jobs. A /job/<id> URL is rejected.
     *   - page: Optional. Page number starting at 1. Example: 2. Omitted means page 1. A page already present in a results URL is kept when this is omitted or 1.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function seekSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('seek_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * SeLoger Agency. Retrieve detailed profile information for a SeLoger real estate agency including contact details, ratings, reviews, and address. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/seloger/agency`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A valid SeLoger agency profile URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function selogerAgency(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('seloger_agency', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * SeLoger Agency Rent. Retrieve paginated rental property listings published by a specific SeLoger agency using its numeric agency ID. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/seloger/agency/rent`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A valid SeLoger agency ID.
     *   - page: Page number for paginating through the agency's rental listings.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function selogerAgencyRent(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('seloger_agency_rent', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * SeLoger Agency Sale. Retrieve paginated sale property listings published by a specific SeLoger agency using its numeric agency ID. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/seloger/agency/sale`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A valid SeLoger agency ID.
     *   - page: Page number for paginating through the agency's sale listings.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function selogerAgencySale(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('seloger_agency_sale', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * SeLoger Property. Efficiently extract detailed data from a SeLoger real estate listing including agency info, pricing, photos, description, and property criteria. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/seloger/property`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A valid SeLoger property listing URL.
     *   - return_page_source: Whether to return the raw HTML source of the property page instead of parsed JSON data.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function selogerProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('seloger_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * SeLoger Search. Efficiently extract real estate listings from SeLoger search pages for market insights, property management, and investment analysis. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/seloger/search`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A valid SeLoger search results URL. Any SeLoger search page URL with filters is supported: location, property type, price range, surface, and number of rooms c…
     *   - return_page_source: Whether to return the raw HTML source of the search results page instead of parsed JSON data.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function selogerSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('seloger_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Sephora Product. Read one European Sephora product by id or product URL. Set region when you are not on the French shop. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/sephora/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A Sephora product URL. A product id such as 831955 also works.  https://www.sephora.fr/p/midnight-espresso---eau-de-parfum-au-cafe-831955.html
     *   - region: Shop when query is only an id. Use fr for France or de for Germany. Leave empty for France.
     *   - return_page_source: Return the rendered HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function sephoraProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('sephora_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Sephora Search. Search a European Sephora shop by keyword. Region defaults to France. Page through makeup and skincare cards. The US site is a different page and is not included. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/sephora/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A product word, for example mascara. Or paste a full Sephora search URL.
     *   - region: Shop code. Use fr for France or de for Germany. Leave empty for France. A full URL picks the shop.
     *   - page: Page number, starting at 1. Use 2 for the next page of products.
     *   - return_page_source: Return the rendered HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function sephoraSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('sephora_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Shophouzz Product. Retrieve full product details from Shophouzz, including title, price, variants, images, vendor, and structured metadata. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/shophouzz/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full URL of the Shophouzz product page to retrieve details for.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function shophouzzProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('shophouzz_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Shopify Apps. Retrieve structured details about any Shopify App Store listing, including title, logo, screenshots, pricing plans, categories, and description. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/shopify/apps`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): URL of the Shopify App Store listing to scrape.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function shopifyApps(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('shopify_apps', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Shopify Catalog. List products from a Shopify shop. query is the shop domain or a URL on that shop. page and limit choose the slice. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/shopify/catalog`
     *
     * @param array{query: string, page?: int|float, limit?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Shop domain or a URL on that shop.
     *   - page: Page number, starting at 1.
     *   - limit: How many items to return on this page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function shopifyCatalog(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('shopify_catalog', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Shopify Collections. List collections from a Shopify shop. query is the shop domain or a URL on that shop. page and limit choose the slice. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/shopify/collections`
     *
     * @param array{query: string, page?: int|float, limit?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Shop domain or a URL on that shop.
     *   - page: Page number, starting at 1.
     *   - limit: How many items to return on this page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function shopifyCollections(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('shopify_collections', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Shopify Product. Extract full product details from any Shopify store product page, including title, variants, pricing, images, inventory, and options. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/shopify/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): URL of a Shopify product page to scrape.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function shopifyProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('shopify_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * SimilarWeb Domain. Retrieve website traffic and engagement metrics for a domain from the public Similarweb page, including visits, bounce rate, rank, keywords, and traffic sources. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/similarweb/domain`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A domain name to retrieve traffic and engagement metrics for.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function similarwebDomain(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('similarweb_domain', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Similarweb Search. Search the public Similarweb page for websites, companies, and mobile apps related to a keyword. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/similarweb/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Domain name or keyword to search for in the Similarweb database.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function similarwebSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('similarweb_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * SnapEDA Product. SnapEDA Product API: fetch full part page data from a SnapEDA URL or MPN/manufacturer slug. Returns CAD models, datasheet, RoHS, distributor pricing and availability via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/snapeda/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): SnapEDA part page URL or MPN/manufacturer slug.
     *   - return_page_source: When true, return the raw rendered HTML as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function snapedaProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('snapeda_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * SnapEDA Search. SnapEDA Search API: search electronic parts by keyword or URL on SnapMagic Search (ex-SnapEDA). Returns MPN, manufacturer, pricing, CAD availability and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/snapeda/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full SnapEDA / SnapMagic search URL.
     *   - page: 1-based page number override (default: read from URL or 1). SnapEDA returns 20 results per page.
     *   - return_page_source: When true, return the raw rendered HTML as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function snapedaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('snapeda_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Starbucks Menu. Full Starbucks menu for one café, with the default-size price of each item. Prices use browser rendering. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/starbucks/menu`
     *
     * @param array{store_number?: string, query?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - store_number: Café number from Search, short (9230) or full (9230-154245).
     *   - query: Same café number, or a menu URL that contains storeNumber. Used when store_number is empty.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function starbucksMenu(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('starbucks_menu', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Starbucks Product. One Starbucks item at one café, with a price for every size. Get the café from Search first. Prices use browser rendering. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/starbucks/product`
     *
     * @param array{query: string, store_number?: string, form_code?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product and form, or a Starbucks product URL.
     *   - store_number: Café number from Search, short (9230) or full (9230-154245). Required when the product URL has no storeNumber.
     *   - form_code: Form when query is only a product number. Usually hot or iced.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function starbucksProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('starbucks_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Starbucks Search. Nearest Starbucks cafés from coordinates or a store-locator URL. Returns address, hours, amenities, and the store number used by Menu and Product. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/starbucks/search`
     *
     * @param array{query?: string, lat?: int|float, lng?: int|float, place?: string, features?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query: Store-locator URL, or a lat,lng pair. Required when lat and lng are empty.
     *   - lat: Latitude. Send it with lng. If both are set, they replace any coordinates found in query.
     *   - lng: Longitude. Send it with lat.
     *   - place: Optional place label sent with the coordinates, for example New York, NY. Coordinates are still required.
     *   - features: Optional amenity filter. Separate codes with commas. ON keeps cafés that offer mobile order.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function starbucksSearch(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('starbucks_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Stats. Infrastructure health for an engine or endpoint over the last hour. Not scoped to your account or tenant. Enabled per account: HTTP 403 means contact support to activate it.
     *
     * `GET /v2/stats`
     *
     * @param array{engine?: string, path?: string} $params
     *   - engine: API family to check, for example website. Provide at least engine or path.
     *   - path: Specific endpoint to check, for example /v2/website/crawler. If you also pass engine, use an endpoint from that API.
     */
    public function stats(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('stats', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * StockX Product. Retrieve detailed product information from StockX, including market prices, bid/ask data, size variants, and product metadata. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/stockx/product`
     *
     * @param array{query: string, country?: string, currency?: string, language?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A StockX product slug.
     *   - country: Country code for localized pricing and availability.
     *   - currency: Currency code for price display.
     *   - language: Language code for localized content.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function stockxProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('stockx_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * StockX Search. Search StockX for products by name, brand, SKU, or slug and receive a list of matching items with product IDs, slugs, images, and colorways. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/stockx/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search query for StockX products. Can be a product name, brand, SKU, or slug.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function stockxSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('stockx_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * StockX Trends. Retrieve trending products on StockX by category, with options to sort by featured, most active, or release date. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/stockx/trends`
     *
     * @param array{query: string, sort_by?: string, country?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): StockX product category to retrieve trending items for.
     *   - sort_by: Sort order for trending results.
     *   - country: Country code for localized trending data.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function stockxTrends(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('stockx_trends', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * StubHub Event. Read one StubHub event from its URL or numeric id, including the lowest printed ticket price. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/stubhub/event`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. StubHub event URL or numeric id, for example 162387399 or https://www.stubhub.com/harlem-globetrotters-marseille-tickets-3-31-2027/event/162387399/.…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function stubhubEvent(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('stubhub_event', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * StubHub Search. Search StubHub events by keyword or by a StubHub search URL. The response is the first embedded page. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/stubhub/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Keyword, for example nba, or a StubHub search URL such as https://www.stubhub.com/secure/search/?q=nba. An event URL is rejected.
     *   - page: Optional. Only page 1 returns events. Example: 1. Page 2 and above return 404 because the search document has no further page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function stubhubSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('stubhub_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Target Product. Get a Target.com product page: price, description, images and variations via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/target/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Target product URL or bare TCIN.
     *   - return_page_source: When true, return rendered HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function targetProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('target_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Target Search. Search Target.com by keyword or search URL. Returns product cards with price, rating and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/target/search`
     *
     * @param array{query: string, page?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or Target search URL.
     *   - page: Page number (1-based).
     *   - return_page_source: When true, return rendered HTML instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function targetSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('target_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * TDLR License. Fetch one TDLR license by detail id or SearchResultDetail URL, including status, subtype, DBA, and notes. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/tdlr/license`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Detail id, example AIRREF00000564, or the SearchResultDetail URL from search.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function tdlrLicense(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('tdlr_license', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * TDLR License Search. Search Texas TDLR licenses by name, city, county, or ZIP. license_type such as AIRREF is required for a useful search. 25 rows per page. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/tdlr/search`
     *
     * @param array{query?: string, license_type?: string, city?: string, county?: string, postal_code?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query: Optional when city, county, or postal_code is set. Person or business name, example SMITH. A detail URL is rejected.
     *   - license_type: Optional on the request, required for a useful search. License type code, example AIRREF for air conditioning contractors. ALL or blank searches every type.
     *   - city: Optional. Business city. Example: Austin. One of query, city, county, or postal_code is required.
     *   - county: Optional. Business county. Example: TRAVIS.
     *   - postal_code: Optional. Business ZIP. Example: 78701.
     *   - page: Optional. Page number starting at 1. Example: 2. Defaults to 1. Each page has 25 rows.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function tdlrSearch(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('tdlr_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * TED Notice. TED notice profile: buyer, lots, deadline, value and documents (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/ted/notice`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Publication number, or a TED notice URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function tedNotice(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('ted_notice', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * TED Search. Search TED procurement notices by keyword or filters. Returns notice cards and pagination (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/ted/search`
     *
     * @param array{query?: string, notice_type?: string, country?: string, place?: string, cpv?: string, buyer?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query: Keyword, publication number, or a TED search URL.
     *   - notice_type: Notice code such as cn-standard or can-standard. Combined with AND.
     *   - country: Buyer country, ISO alpha-2 or alpha-3. FR becomes FRA. A country name returns 400.
     *   - place: Place of performance: country code or NUTS code such as FRK24.
     *   - cpv: CPV code or prefix. Digits and an optional star, for example 72000000 or 30*.
     *   - buyer: Buyer name, matched as a phrase.
     *   - page: Page from 1. next is always null: pass page + 1. A page past the last one returns 404.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function tedSearch(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('ted_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Thalia Product. Read one Thalia product from its URL. You get price, author or brand, and the product details. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/thalia/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Product URL or Thalia article id.
     *   - return_page_source: When true, returns {"result": "<html>..."} instead of the parsed JSON. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function thaliaProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('thalia_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Thalia Search. Search Thalia by keyword and page books, media, and gifts. Cards include title, price, and the product link. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/thalia/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword or a thalia.de search URL (/suche or a category URL). A product URL returns 400.
     *   - page: Page number, from 1. Sent to Thalia as the query parameter p. Default 1.
     *   - return_page_source: When true, returns {"result": "<html>..."} instead of the parsed JSON. Default false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function thaliaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('thalia_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * TheFork Restaurant. Extract a full TheFork restaurant profile from a restaurant page URL, including ratings, tags, photo gallery, opening hours, and AI review summaries via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/thefork/restaurant`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full TheFork restaurant page URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function theforkRestaurant(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('thefork_restaurant', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * TheFork Search. Search TheFork restaurants from a full search or city URL and retrieve ratings, cuisine, prices, availability, review summaries, and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/thefork/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full TheFork search or city listing URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function theforkSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('thefork_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Thomasnet Company. Get a full Thomasnet supplier profile from a company URL, including contact details, product categories, and business information. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/thomasnet/company`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Thomasnet company profile URL from your browser.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function thomasnetCompany(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('thomasnet_company', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Thomasnet Search. Search Thomasnet suppliers from a search or category URL and get company listings, filters, name suggestions, and pagination. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/thomasnet/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Thomasnet search URL from your browser.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function thomasnetSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('thomasnet_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Ticketmaster Event. Fetch one Ticketmaster event from a slugged event URL. The slug is searched and the matching event id is returned with the venue address. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/ticketmaster/event`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Slugged event URL, example https://www.ticketmaster.com/suns-vs-jazz-kids-day-phoenix-arizona-01-24-2027/event/19006507A7257EEA. A short /event/{disc…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function ticketmasterEvent(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('ticketmaster_event', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Ticketmaster Search. Search Ticketmaster events by keyword. Returns event cards, including Ticketweb partner rows, and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/ticketmaster/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Keyword, example jazz, or a ticketmaster.com search URL such as https://www.ticketmaster.com/search?q=jazz. An event URL is rejected.
     *   - page: Optional. Page number starting at 1. Example: 2. Defaults to 1. On ticketmaster.com the page query is zero-based, so API page 2 is page=1 on the site.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function ticketmasterSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('ticketmaster_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * TikTok Top Ads Ad. Get one TikTok Creative Center Top Ad by URL or id: creative, landing page, CTR, and engagement (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/tiktoktopads/ad`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Ad id or detail URL from search.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function tiktoktopadsAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('tiktoktopads_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * TikTok Top Ads Search. Search TikTok Creative Center Top Ads by region, objective, period, and keyword. Returns ad cards and pagination (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/tiktoktopads/search`
     *
     * @param array{query?: string, keyword?: string, region?: string, objective?: string, period?: string, order_by?: string, industry?: string, page?: int|float, per_page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query: Full TikTok Top Ads search URL, or a keyword.
     *   - keyword: Brand or product keyword.
     *   - region: ISO country code (country_code).
     *   - objective: Campaign objective id (URL param object).
     *   - period: Lookback window: 7, 30, or 180.
     *   - order_by: Sort: for_you, reach/impression, ctr/like.
     *   - industry: Industry key filter.
     *   - page: Page number.
     *   - per_page: Page size (max 20).
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function tiktoktopadsSearch(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('tiktoktopads_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Trade-A-Plane Listing. Read one Trade-A-Plane aircraft listing from its URL. You get the asking price, the airframe details, and the seller. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/tradeaplane/listing`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Listing URL that includes listing_id.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function tradeaplaneListing(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('tradeaplane_listing', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Trade-A-Plane Search. Search Trade-A-Plane aircraft listings by keyword and page the results. Cards include title, price, and the listing link. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/tradeaplane/search`
     *
     * @param array{query: string, listing_type?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword, or a Trade-A-Plane search URL without listing_id.
     *   - listing_type: aircraft or engine when query is a keyword. Ignored when query is a URL.
     *   - page: Page from 1. Sent as s-page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function tradeaplaneSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('tradeaplane_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Trustpilot Company Info. Retrieve Trustpilot company profile data, including trust score, star rating, categories, contact info, and review response behavior. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/trustpilot/company/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A Trustpilot company URL or domain name.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function trustpilotCompanyInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('trustpilot_company_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Untappd Beer. Read one Untappd beer, including ABV, IBU, and brewery. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/untappd/beer`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. The numeric Untappd beer id from search, or a beer URL under /b/ or /beer/. A keyword is not accepted.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function untappdBeer(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('untappd_beer', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Untappd Search. Search Untappd beers by keyword. Cards include brewery, ABV, and IBU. next is null when Untappd does not expose a next page. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/untappd/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. A beer keyword, or an Untappd search URL whose path is /search.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function untappdSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('untappd_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Upwork Freelancer. Upwork Freelancer API: fetch public freelancer profile data from a profile ID, username or URL. Returns bio, hourly rate, skills, ratings and agency info via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/upwork/freelancer`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Upwork freelancer profile ID, username, or full profile URL.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function upworkFreelancer(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('upwork_freelancer', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Upwork Jobs. Upwork Jobs API: search freelance job listings by skill slug or URL. Returns budgets, skills, experience level and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/upwork/jobs`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Upwork skill slug or full freelance-jobs URL.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function upworkJobs(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('upwork_jobs', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Upwork Services. Upwork Services API: browse Project Catalog listings by category slug or URL. Returns prices, product IDs and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/upwork/services`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Upwork Project Catalog category slug or full services URL.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function upworkServices(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('upwork_services', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Upwork Services Info. Upwork Services Info API: fetch Project Catalog product details from a product URL. Returns packages, pricing, seller, media and breadcrumbs via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/upwork/services/info`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Upwork Project Catalog product URL.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function upworkServicesInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('upwork_services_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Usage. Retrieve real-time usage statistics and credit balance for your Piloterr account.
     *
     * `GET /v2/usage`
     *
     * @param array{} $params
     */
    public function usage(array $params = [], ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('usage', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * USAspending Award. Fetch one US federal award by its generated id or by a usaspending.gov award URL. Amounts are a number plus a display string. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/usaspending/award`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Generated award id or a usaspending.gov/award URL. Example: CONT_AWD_GSFC0198106DNAS526555_8000_-NONE-_-NONE-.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function usaspendingAward(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('usaspending_award', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * USAspending Search. Search US federal awards by keyword. award_type selects one group: contract (default), grant, idv, or loan. Amounts are a number plus a display string. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/usaspending/search`
     *
     * @param array{query: string, award_type?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Keyword or a usaspending.gov search URL. Example: software. An award URL returns 400.
     *   - award_type: Optional. One group: contract (default when omitted), grant, idv, or loan. Example: grant.
     *   - page: Optional. Page number from 1. Example: 2. Defaults to 1. Each page has 10 awards. total_results stays null.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function usaspendingSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('usaspending_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Vestiaire Collective Product. Fetch one Vestiaire Collective listing by product URL. The response is a flat object with price, size, condition, and seller. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/vestiairecollective/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A vestiairecollective.com product URL ending in the item id and .shtml. The response is one flat listing. price is the number on the page and price_display is…
     *   - return_page_source: Default false. true replaces the listing with result, the rendered HTML.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function vestiairecollectiveProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('vestiairecollective_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Vestiaire Collective Search. Search Vestiaire Collective by keyword or catalog URL. Each card has brand, name, price, size, and a product link. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/vestiairecollective/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A keyword or a vestiairecollective.com search or category URL. Empty, another host, or a product URL returns 400. A keyword searches www.vestiairecollective.co…
     *   - page: Page number starting at 1. Omit it for page 1, which has no /p-N/ segment. Page 2 requests /p-2/ and sets pagination.page to 2. pagination.next is the next cat…
     *   - return_page_source: Default false. true replaces results and pagination with result, the rendered HTML.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function vestiairecollectiveSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('vestiairecollective_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Vinted Item. Fetch a Vinted listing by item URL or numeric ID. Parses the public item page (Next.js payload), returns a normalized snake_case object with photos, attributes, shipping, pricing, and optional seller profile. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/vinted/item`
     *
     * @param array{query: string, region?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Vinted item URL or numeric item ID.
     *   - region: Force the Vinted domain when query is a bare item ID only.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function vintedItem(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('vinted_item', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Vinted Search. Search Vinted second-hand listings by keyword or catalog URL across vinted.fr, vinted.com and other domains. Returns results and pagination. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/vinted/search`
     *
     * @param array{query: string, page?: int|float, per_page?: int|float, order?: string, region?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword or full Vinted catalog URL. Filters from the URL query string are forwarded to the internal Vinted API.
     *   - page: Page number. Default 1.
     *   - per_page: Results per page. Default 24.
     *   - order: Optional sort order.
     *   - region: Force the Vinted domain when query is a keyword only.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function vintedSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('vinted_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Vinted User Info. Retrieve public Vinted seller profile by member URL or user ID. Returns the raw /api/v2/users/{id} object: login, photo, feedback stats, followers, verification, bundle discounts, and listing counts. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/vinted/user/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Vinted member profile URL, direct API URL, or numeric user ID.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function vintedUserInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('vinted_user_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Viva Real Property. Read one Viva Real property from its URL. The price follows the operation of that URL, so a sale link stays a sale price. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/vivareal/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Viva Real listing URL under /imovel/ with an id- number.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function vivarealProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('vivareal_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Viva Real Search. Search Viva Real by city and operation, sale or rent. Page with pagina. Development cards and 'from' prices are left out. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/vivareal/search`
     *
     * @param array{query: string, operation?: string, property_type?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): City, City plus UF, or a Viva Real search URL.
     *   - operation: Sale or rent when query is a city.
     *   - property_type: Optional type when query is a city.
     *   - page: Page from 1. Placeholder 2. Viva Real receives this as pagina=2. Page 1 and page 2 return different listings. A few featured ids can repeat. Most ids on page 2…
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function vivarealSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('vivareal_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Walmart Product. Extract full Walmart product page (PDP) data from a /ip/ URL: pricing, ratings, images, fulfillment, specs, badges, and availability via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/walmart/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Walmart product page URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function walmartProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('walmart_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Walmart Search. Scrape Walmart.com search result pages from a full URL and retrieve product cards with pricing, ratings, availability, and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/walmart/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Walmart search results URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function walmartSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('walmart_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Walmart Suggest. Get Walmart.com search autocomplete suggestions for a keyword via browser rendering, with optional US ZIP code localization. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/walmart/suggest`
     *
     * @param array{query: string, zipcode?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search keyword for Walmart autocomplete suggestions.
     *   - zipcode: Optional US ZIP code to localize Walmart store and inventory context for suggestions.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function walmartSuggest(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('walmart_suggest', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Website Antibot. Detect which anti-bot protection protects a website before you scrape. Get the vendor, confidence level, and matching clues from a single URL check. Credit cost: 1 credit per call.
     *
     * `GET /v2/website/antibot`
     *
     * @param array{query: string, timeout?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full URL or domain name to analyze for anti-bot protection. Must be a valid hostname.
     *   - timeout: Maximum request timeout in seconds. Defaults to 15.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function websiteAntibot(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('website_antibot', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Website Crawler. Fetch public pages with fast HTTP crawling (no JavaScript). Best first choice for static or server-rendered HTML; use Rendering or WebUnlocker when JS or anti-bot blocks you. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/website/crawler`
     *
     * @param array{query: string, allow_redirects?: bool, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A public website URL to fetch with the Crawler engine (HTTP only, no JavaScript). Must include http:// or https://.
     *   - allow_redirects: Controls whether the crawler should follow HTTP redirects.
     *   - return_page_source: Controls whether the response returns the raw, unprocessed HTML source of the page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function websiteCrawler(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('website_crawler', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Website Email Phone Extractor. Extract emails and phone numbers from websites for comprehensive contact details, including social media profiles across 12+ platforms. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/website/email_phone_extractor`
     *
     * @param array{query: string, country_code?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A website URL to crawl for contact information. Must include the http:// or https:// protocol. The crawler will follow internal links ("a" anchors) to find con…
     *   - country_code: An ISO 3166-1 alpha-2 country code used to improve the accuracy of phone number validation and parsing.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function websiteEmailPhoneExtractor(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('website_email_phone_extractor', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Website Rendering. Render JavaScript-heavy pages in a headless browser and return post-render HTML. Use when Crawler returns empty DOM; escalate to WebUnlocker if bot protection blocks the session. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/website/rendering`
     *
     * @param array{query: string, wait_in_seconds?: int|float, wait_for?: string, block_ads?: bool, timeout?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A public website URL to render in a headless browser. Must include http:// or https://.
     *   - wait_in_seconds: Number of seconds to wait after page load before returning the rendered HTML. Useful for pages with delayed rendering or animations.
     *   - wait_for: A CSS or XPath selector to wait for before returning the rendered HTML. The headless browser will hold the response until the specified element appears in the…
     *   - block_ads: Controls whether the headless browser should block ad requests during rendering.
     *   - timeout: Maximum number of seconds to wait for the page to fully load before returning whatever has been rendered so far.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function websiteRendering(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('website_rendering', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Website Screenshot. Browser-like Screenshot API that captures webpages as PNG/JPEG/WebP or PDF for previews, QA, reporting, monitoring, and archiving no headless setup. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/website/screenshot`
     *
     * @param array{url: string, format?: string, device?: string, full_page?: bool, full_page_scroll?: bool, full_page_scroll_duration?: int|float, viewport_width?: int|float, viewport_height?: int|float, scale_factor?: int|float, image_quality?: string, selector?: string, cache?: bool, cache_ttl?: int|float, remove_selectors?: string, remove_cookie_banners?: bool, remove_ads?: bool, block_resources?: string, block_urls?: string, delay?: int|float, wait_until?: list<string>, wait_for_selector?: string, proxy?: string, s3_secret_key?: string, s3_access_key_id?: string, s3_bucket?: string, s3_object_key?: string, s3_region?: string, storage_endpoint?: string, s3_url?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - url (required): The URL of the webpage to capture. Examples:  https://www.amazon.com/s?k=pokemon
     *   - format: The output format of the screenshot.
     *   - device: The device type to emulate for the screenshot.
     *   - full_page: Capture the entire page instead of just the visible viewport.
     *   - full_page_scroll: Scroll the page to fully load lazy-loaded elements before capturing a full-page screenshot.
     *   - full_page_scroll_duration: Time in milliseconds for scrolling before capturing the full page.
     *   - viewport_width: The width of the browser viewport in pixels.
     *   - viewport_height: The height of the browser viewport in pixels.
     *   - scale_factor: The scale factor for high-resolution screenshots.
     *   - image_quality: Generate images with custom quality settings.
     *   - selector: Capture a specific element on the page instead of the full viewport.
     *   - cache: Cache the response.
     *   - cache_ttl: Cache the response for a custom TTL (in seconds).
     *   - remove_selectors: A comma-separated list of elements to hide before capturing (e.g., ads, popups).
     *   - remove_cookie_banners: Automatically remove cookie banners before capturing.
     *   - remove_ads: Automatically remove ads before capturing.
     *   - block_resources: Comma-separated list of resource types to block (e.g., “image,stylesheet,font”).
     *   - block_urls: Comma-separated list of URL patterns to block (e.g., “analytics,tracking,advertisement”).
     *   - delay: Delay in seconds before capturing the screenshot.
     *   - wait_until: Define when to capture.
     *   - wait_for_selector: Wait for a specific element to appear before taking the screenshot.
     *   - proxy: Specify a proxy server to route your request through.
     *   - s3_secret_key: AWS S3 secret access key.
     *   - s3_access_key_id: AWS S3 access key ID.
     *   - s3_bucket: The S3 bucket name where the screenshot will be uploaded.
     *   - s3_object_key: The filename for the S3 object (auto-generated if not provided).
     *   - s3_region: AWS S3 region for storage.
     *   - storage_endpoint: Leave this field empty for AWS S3. Only specify a value if required. S3-compatible storage services are supported, for example, use https://<accountId>.r2.clou…
     *   - s3_url: Use S3 storage for screenshots. The S3 URL will be returned in the response.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function websiteScreenshot(array $params, ?RequestOptions $options = null): JsonResponse|BinaryResponse
    {
        return $this->callOperation('website_screenshot', $params, $options);
    }

    /**
     * Website Technology. Identify the technologies behind any website CMS, frameworks, analytics, CDN, hosting, and more, for competitive market analysis and technological insight. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/website/technology`
     *
     * @param array{query: string, mode?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A website URL to analyze for technology stack detection. Must include the http:// or https:// protocol.
     *   - mode: Controls the level of detail returned in the technology detection response.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function websiteTechnology(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('website_technology', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Website WebUnlocker. Bypass advanced anti-bot systems (Cloudflare, DataDome, Akamai, PerimeterX) on whitelisted domains. Combines browser rendering and unlock tooling; use after Crawler and Rendering fail. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/website/webunlocker`
     *
     * @param array{query: string, allow_redirects?: bool, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A public website URL to unlock with the WebUnlocker engine. Must include http:// or https://. The target domain must be on Piloterr's approved whitelist.
     *   - allow_redirects: Controls whether the WebUnlocker engine should follow HTTP redirects.
     *   - return_page_source: Controls whether the response returns the raw, unprocessed HTML source of the page.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function websiteWebunlocker(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('website_webunlocker', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Weibo Post Info. Retrieve one public Weibo post by post id, including text, images, publish time, engagement counts, and author profile. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/weibo/post/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Weibo post id.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function weiboPostInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('weibo_post_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Weibo Search. Search public Weibo posts by keywords. Each post includes the author, text, publish time, engagement counts, image, and video link. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/weibo/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keywords to search, such as AI.
     *   - page: Page number, starting at 1. Default 1. Page 2 is the next slice of the same keywords.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function weiboSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('weibo_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Welcome to the Jungle Company. Welcome to the Jungle company profile: headcount, offices, sectors and website (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/welcometothejungle/company`
     *
     * @param array{query: string, language?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Slug, company name, or a Welcome to the Jungle company URL.
     *   - language: fr (default) or en. en-gb and en-us count as en. Chooses the language of the profile text and URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function welcometothejungleCompany(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('welcometothejungle_company', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Welcome to the Jungle Search. Search Welcome to the Jungle jobs. Returns offer cards and pagination (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/welcometothejungle/search`
     *
     * @param array{query: string, language?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Job keyword or a Welcome to the Jungle jobs-search URL.
     *   - language: fr (default) or en. en-gb and en-us count as en. A /fr/ or /en/ path in the URL overrides this.
     *   - page: Page from 1, 30 offers. A page value already in the URL overrides this.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function welcometothejungleSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('welcometothejungle_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Wellfound Company Info. Retrieve startup and company data from Wellfound (formerly AngelList), including description, funding, team size, hiring status, and social links. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/wellfound/company/info`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A Wellfound company URL or company slug.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function wellfoundCompanyInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('wellfound_company_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * X Post Info (twitter). X Post Info API: fetch public tweet data (text, likes, retweets, views, media) from a status URL or tweet ID via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/x/post/info`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): X tweet to retrieve. Accepts a full status URL or numeric tweet ID.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function xPostInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('x_post_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * X Profile Info (twitter). X Profile Info API: fetch public X/Twitter profile data (bio, followers, verification, avatars) from a username or URL via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/x/profile/info`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): X profile to look up. Accepts a username, @handle, or profile URL.
     *   - return_page_source: When true, return the raw HTML page source as {"result": "..."} instead of structured JSON. Defaults to false.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function xProfileInfo(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('x_profile_info', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Yahoo Search. Query Yahoo via API and retrieve structured organic results with country and language. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/yahoo/search`
     *
     * @param array{query: string, page?: int|float, gl?: string, hl?: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Search query sent to Yahoo Search.
     *   - page: Page number. Page 1 is the first page of results.
     *   - gl: Country code, for example us, fr, gb, de, jp.
     *   - hl: Language code, for example en, fr, de, ja, zh.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function yahooSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('yahoo_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Yellowpages Business. Extract a full Yellow Pages business profile from a listing URL, including phone, website, categories, and ratings via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/yellowpages/business`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Yellow Pages business listing URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function yellowpagesBusiness(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('yellowpages_business', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Yellowpages Search. Search Yellow Pages businesses from a full search URL and retrieve names, phones, addresses, ratings, opening hours, and pagination via browser rendering. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/yellowpages/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Yellow Pages search URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function yellowpagesSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('yellowpages_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Yelp Business. Fetch a Yelp business profile from a full business URL with phone, address, website, logo, hours, and claim status. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/yelp/business`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Yelp business URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function yelpBusiness(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('yelp_business', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Yelp Reviews. Fetch paginated Yelp reviews for a business with rating, text, author profile, reactions, and attached photos or videos. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/yelp/reviews`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Yelp business ID / encid.
     *   - page: Page number. Each page returns up to 10 reviews. Default: 1.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function yelpReviews(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('yelp_reviews', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Yelp Search. Search Yelp by keyword and location and retrieve paginated business cards with ratings, categories, photos, and sponsored flags. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/yelp/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Yelp search URL with find_desc and find_loc query parameters.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function yelpSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('yelp_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Zap Imóveis Ad. Get a full Zap Imóveis listing by URL: price, IPTU, features, coordinates, images, and publisher (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/zapimoveis/ad`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Zap Imóveis listing URL. Accepts /imovel/ and /lancamentos/.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zapimoveisAd(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zapimoveis_ad', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Zap Imóveis Search. Search Zap Imóveis listings by city or search URL. Returns prices, IPTU, condominium fees, rooms, and pagination (1 credit). Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/zapimoveis/search`
     *
     * @param array{query: string, operation?: string, property_type?: string, page?: int|float, min_price?: int|float, max_price?: int|float, min_area?: int|float, max_area?: int|float, min_bedrooms?: int|float, min_bathrooms?: int|float, min_parking?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): City, City, UF, neighborhood, or full Zap Imóveis search URL.
     *   - operation: Transaction type. Used when query is a city. Ignored as a path builder when query is a full URL.
     *   - property_type: Property type. Used when query is a city.
     *   - page: Page number (1-based). Default: 1. Values above 1 set pagina on the URL.
     *   - min_price: Minimum asking price in BRL.
     *   - max_price: Maximum asking price in BRL.
     *   - min_area: Minimum area in m².
     *   - max_area: Maximum area in m².
     *   - min_bedrooms: Minimum bedroom count.
     *   - min_bathrooms: Minimum bathroom count.
     *   - min_parking: Minimum parking spaces.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zapimoveisSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zapimoveis_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Zazzle Product. Fetch one Zazzle product by its product URL or by a slug that ends in the numeric product id. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/zazzle/product`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Product URL or slug ending in the numeric product id. Example: https://www.zazzle.com/branded_logo_two_tone_coffee_mug-256528848440338952.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zazzleProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zazzle_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Zazzle Search. Search Zazzle products by keyword. page maps to the pg parameter. Prices are a number plus a display string. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/zazzle/search`
     *
     * @param array{query: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Required. Keyword or a zazzle.com/s search URL. Example: coffee mug. A product URL returns 400.
     *   - page: Optional. Page number from 1. Example: 2. Maps to the Zazzle pg parameter. Defaults to 1.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zazzleSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zazzle_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Zillow Property. Extract full property details from a Zillow homedetails URL, including specs, photos, schools, tax history, and agent attribution. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/zillow/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Zillow homedetails URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zillowProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zillow_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Zillow Search. Search Zillow listings from a search or map URL and retrieve prices, beds, baths, coordinates, and listing status. Credit cost: 3 credits per call.
     *
     * `GET / POST /v2/zillow/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Zillow search or map results URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zillowSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zillow_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ZonaProp Property. Read one ZonaProp listing from its URL. You get the asking price in USD or ARS, the address, and the publisher. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/zonaprop/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): ZonaProp listing URL under /propiedades/clasificado/.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zonapropProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zonaprop_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * ZonaProp Search. Search ZonaProp for apartments or houses in an Argentine city. Page with pagina. A few featured ads can repeat. Development projects priced 'from' are left out. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/zonaprop/search`
     *
     * @param array{query: string, operation?: string, property_type?: string, page?: int|float, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Place or a ZonaProp search URL.
     *   - operation: Sale or rent when query is a place.
     *   - property_type: Kind of property. Default departamentos.
     *   - page: Page from 1. ZonaProp writes this into the path as -pagina-N.html.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zonapropSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zonaprop_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Zoopla Property. Extract full property details from a Zoopla listing URL, including price, specs, photo gallery, EPC rating, coordinates, and agent data. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/zoopla/property`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Zoopla property detail URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zooplaProperty(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zoopla_property', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Zoopla Search. Search Zoopla listings from a search URL and retrieve prices, specs, photos, agency info, and pagination. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/zoopla/search`
     *
     * @param array{query: string, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Full Zoopla search results URL.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zooplaSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zoopla_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Zooplus Product. Read one Zooplus product by id or URL, in the region of that shop. Variants keep their own price and EAN. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/zooplus/product`
     *
     * @param array{query: string, region?: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): A product link, a /shop/.../{id} path, or the product number.
     *   - region: Which country shop when query is a number or a path. fr is France (default). de is Germany. uk is the United Kingdom.
     *   - return_page_source: Set to true to get the raw HTML in result instead of the product.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zooplusProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zooplus_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Zooplus Search. Search a Zooplus country shop by keyword. Region defaults to France. Page through food, litter, and accessory cards with local prices. Credit cost: 1 credit per call.
     *
     * `GET / POST /v2/zooplus/search`
     *
     * @param array{query: string, region?: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): What to look for. A word, or a Zooplus search link.
     *   - region: Which country shop. fr is France (default, www.zooplus.fr). de is Germany (www.zooplus.de). uk is the United Kingdom (www.zooplus.co.uk).
     *   - page: Which page of results, starting at 1. Page 2 uses p=2 and returns different products.
     *   - return_page_source: Set to true to get the raw HTML in result instead of the product list.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zooplusSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zooplus_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Zoro Product. Get a Zoro product page: title, brand, USD price, Zoro number, manufacturer number, images, and specifications. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/zoro/product`
     *
     * @param array{query: string, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Zoro product URL, or a path that contains /i/G....
     *   - return_page_source: When true, return the rendered HTML as {"result": "..."} instead of JSON.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zoroProduct(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zoro_product', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }

    /**
     * Zoro Search. Search Zoro by keyword or category URL. Returns product cards with USD price, brand, Zoro number, and pagination. Credit cost: 2 credits per call.
     *
     * `GET / POST /v2/zoro/search`
     *
     * @param array{query: string, page?: int|float, return_page_source?: bool, fields?: string, is_async?: bool, soft_fail?: bool} $params
     *   - query (required): Keyword, or a Zoro search or category URL. Empty, another host, or a product URL returns 400. A keyword builds /search?q=.... Each card has price as a USD numb…
     *   - page: Page number starting at 1. Omit it for page 1. Page 2 adds page=2, sets pagination.page to 2, and returns the next cards. pagination.next is the next page URL,…
     *   - return_page_source: Default false. true replaces results and pagination with result, the rendered HTML.
     *   - fields: Comma-separated list of fields to keep in the response, with dot notation for nested fields (e.g. name,location.city). Does not change the credit cost.
     *   - is_async: Process the request asynchronously: the response is a job_id to poll on /v1/jobs/{id} (see waitForJob).
     *   - soft_fail: Return HTTP 200 even when an error occurs; the error is then in the response body.
     */
    public function zoroSearch(array $params, ?RequestOptions $options = null): JsonResponse
    {
        $response = $this->callOperation('zoro_search', $params, $options);
        \assert($response instanceof JsonResponse);

        return $response;
    }
}
