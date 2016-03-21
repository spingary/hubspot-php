<?php

namespace Fungku\HubSpot\Api;

class BlogTopics extends Api
{
    /**
     * Get all blog topics.
     *
     * @param  array $params Optional parameters.
     * @return \Fungku\HubSpot\Http\Response
     */
    public function all($params = [])
    {
        $endpoint = "/blogs/v3/topics";

        $queryString = $this->buildQueryString($params);

        return $this->request('get', $endpoint, [], $queryString);
    }

    /**
     * Search blog topics.
     *
     * @param  array $params Optional parameters.
     * @return \Fungku\HubSpot\Http\Response
     */
    public function search($params = [])
    {
        $endpoint = "/blogs/v3/topics/search";

        $queryString = $this->buildQueryString($params);

        return $this->request('get', $endpoint, [], $queryString);
    }

    /**
     * Get a specific blog topic.
     *
     * @param  int $id
     * @return \Fungku\HubSpot\Http\Response
     */
    public function getById($id)
    {
        $endpoint = "/blogs/v3/topics/{$id}";

        return $this->request('get', $endpoint);
    }

    /**
     * Create a new blog topic.
     *
     * @param  array $params Optional Parameters.
     * @return \Fungku\HubSpot\Http\Response
     */
    public function create($params = [])
    {
        $endpoint = '/blogs/v3/topics';

        $options['json'] = $params;

        return $this->request('post', $endpoint, $options);
    }

    /**
     * Update a blog topic.
     *
     * @param  int   $id     The blog post id.
     * @param  array $params The blog post fields to update.
     * @return \Fungku\HubSpot\Http\Response
     */
    public function update($id, $params = [])
    {
        $endpoint = "/blogs/v3/topics/{$id}";

        $options['json'] = $params;

        return $this->request('put', $endpoint, $options);
    }

    /**
     * Delete a blog topic.
     *
     * @param  int $id
     * @return \Fungku\HubSpot\Http\Response
     */
    public function delete($id)
    {
        $endpoint = "/blogs/v3/topics/{$id}";

        return $this->request('delete', $endpoint);
    }

    /**
     * Merge/group blog topics.
     *
     * @param  array $params Optional Parameters.
     * @return \Fungku\HubSpot\Http\Response
     */
    public function groupTopics($params = [])
    {
        $endpoint = '/blogs/v3/topics/group-topics';

        $options['json'] = $params;

        return $this->request('post', $endpoint, $options);
    }
}
