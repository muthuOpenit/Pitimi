<?php

namespace App\Services\Contracts;

use App\PreparedTalk;
use App\ScheduledTalk;
use App\Speaker;
use App\TalkSubject;
use DateTime;
use Illuminate\Support\Collection;

/**
 * The CongregationService contract.
 * @author Rubens Mariuzzo <rubens@mariuzzo.com>
 */
interface CongregationService
{
    /**
     * Authenticate a user.
     *
     * @param string $email    The email.
     * @param string $password The password.
     *
     * @return bool True if authentication is successful.
     */
    public function authenticate($email, $password);

    /**
     * Logout the current user.
     */
    public function logout();

    /**
     * Create a speaker.
     *
     * @param Speaker $speaker The speaker.
     *
     * @return Speaker The created speaker.
     */
    public function createSpeaker(Speaker $speaker);

    /**
     * Get a speaker by id.
     *
     * @param number $id The id of the espeaker.
     *
     * @return Speaker The speaker.
     */
    public function getSpeaker($id);

    /**
     * Get speakers.
     *
     * @param int $page_size The page size.
     *
     * @return array Array of speakers.
     */
    public function getSpeakers($page_size = 10);

    /**
     * Update a speaker.
     *
     * @param Speaker $speaker The speaker.
     *
     * @return Speaker The updated speaker.
     */
    public function updateSpeaker(Speaker $speaker);

    /**
     * Delete a speaker.
     *
     * @param Speaker $speaker The speaker.
     */
    public function deleteSpeaker(Speaker $speaker);

    /**
     * Create a prepared talk.
     *
     * @param TalkSubject $talk_subject The talk subject.
     * @param Speaker     $speaker      The speaker.
     *
     * @return PreparedTalk The created prepared talk.
     */
    public function createPreparedTalk(TalkSubject $talk_subject, Speaker $speaker);

    /**
     * Delete a prepared talk.
     *
     * @param PreparedTalk $prepared_talk The prepared talk.
     */
    public function deletePreparedTalk(PreparedTalk $prepared_talk);

    /**
     * Schedule a talk.
     *
     * @param TalkSubject $talk_subject The talk subject.
     * @param Speaker     $speaker      The speaker.
     * @param DateTime    $date         The date and time.
     *
     * @return ScheduledTalk The scheduled talk.
     */
    public function scheduleTalk(TalkSubject $talk_subject, Speaker $speaker, DateTime $date);

    /**
     * Unschedule a talk.
     *
     * @param ScheduledTalk $scheduled_talk The scheduled talk.
     */
    public function unscheduleTalk(ScheduledTalk $scheduled_talk);

    /**
     * View talks in a month.
     *
     * @param DateTime $date The month.
     *
     * @return array Array of days.
     */
    public function viewTalksInMonth(DateTime $date);

    /**
     * Get all talks.
     * @return Collection
     */
    public function getAllTalks();

    /**
     * Add one or more prepared talks.
     *
     * @param Speaker $speaker  The speaker.
     * @param array   $talk_ids Array of talk ids.
     *
     * @return Speaker The updated speaker.
     */
    public function addPreparedTalks(Speaker $speaker, $talk_ids);
}
