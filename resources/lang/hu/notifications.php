<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'all_read' => 'Összes értesítés elolvasva!',
    'mark_read' => 'Típus törlése :type',
    'none' => 'Nincsenek értesítések',
    'see_all' => 'összes értesítés megtekintése',

    'filters' => [
        '_' => 'összes',
        'user' => 'profil',
        'beatmapset' => 'beatmapek',
        'forum_topic' => 'fórum',
        'news_post' => 'újdonságok',
        'build' => 'verziók',
        'channel' => 'chat',
    ],

    'item' => [
        'beatmapset' => [
            '_' => 'Beatmap',

            'beatmapset_discussion' => [
                '_' => 'Beatmap megbeszélés',
                'beatmapset_discussion_lock' => '":title" megbeszélése lezárult',
                'beatmapset_discussion_lock_compact' => 'A megbeszélést lezárták',
                'beatmapset_discussion_post_new' => 'Új poszt a ":title"-on :username:-tol ":content"',
                'beatmapset_discussion_post_new_empty' => 'Új poszt a ":title"-on :username:-tol',
                'beatmapset_discussion_post_new_compact' => 'Új poszt :username által: ":content"',
                'beatmapset_discussion_post_new_compact_empty' => 'Új poszt :username által',
                'beatmapset_discussion_review_new' => 'Új hozzászolás problémákat tartalmazó tartalomról :username által, ezen a beatmapen: ":title"  
:problems, javaslat :suggestions, dícséret: :praises',
                'beatmapset_discussion_review_new_compact' => 'Új hozzászolás problémákat tartalmazó tartalomról :username által: :problems, javaslat :suggestions, dícséret: :praises',
                'beatmapset_discussion_unlock' => 'A beszélgetést feloldották ezen: ":title"',
                'beatmapset_discussion_unlock_compact' => 'A beszélgetést feloldották',
            ],

            'beatmapset_problem' => [
                '_' => 'Rankedelési probléma a beatmapen',
                'beatmapset_discussion_qualified_problem' => ':username által jelentve lett itt: ":title": ":content"',
                'beatmapset_discussion_qualified_problem_empty' => ':username által jelentve lett itt: ":title"',
                'beatmapset_discussion_qualified_problem_compact' => ':username által jelentve lett ":content"',
                'beatmapset_discussion_qualified_problem_compact_empty' => ':username által jelentve lett',
            ],

            'beatmapset_state' => [
                '_' => 'Beatmap állapota megváltozott',
                'beatmapset_disqualify' => 'Ez a beatmap diszkvalifikálva lett: ":title"',
                'beatmapset_disqualify_compact' => 'A beatmap diszkvalifikálva lett',
                'beatmapset_love' => 'Ez a map kedvelt kategóriába lépett: ":title"',
                'beatmapset_love_compact' => 'Ez a map kedvelt kategóriába lépett',
                'beatmapset_nominate' => 'Ez a beatmap rankedelt lett: ":title"',
                'beatmapset_nominate_compact' => 'A beatmap rankedelt lett',
                'beatmapset_qualify' => '":title" elért annyi szavazatot hogy rankedelési státuszba lépett',
                'beatmapset_qualify_compact' => 'A beatmap rankolási sorba lépett',
                'beatmapset_rank' => ':title rankedelt lett',
                'beatmapset_rank_compact' => 'A beatmap rankedelt lett',
                'beatmapset_reset_nominations' => 'Rankolás elutasítva ezen: ":title"',
                'beatmapset_reset_nominations_compact' => 'Rankolás elutasítva',
            ],

            'comment' => [
                '_' => 'Új hozzászólás',

                'comment_new' => ':username ezt kommentálta: ":content" ezen: ":title"',
                'comment_new_compact' => ':username ezt kommentálta: ":content"',
            ],
        ],

        'channel' => [
            '_' => 'Csevegés',

            'channel' => [
                '_' => 'Új üzenet',
                'pm' => [
                    'channel_message' => ':username üzeni ":title"',
                    'channel_message_compact' => ':title',
                    'channel_message_group' => 'tőle: :username',
                ],
            ],
        ],

        'build' => [
            '_' => 'Változtatások',

            'comment' => [
                '_' => 'Új hozzászólás',

                'comment_new' => ':username ezt kommentálta: ":content" ezen: ":title"',
                'comment_new_compact' => ':username ezt kommentálta: ":content"',
            ],
        ],

        'news_post' => [
            '_' => 'Újdonságok',

            'comment' => [
                '_' => 'Új hozzászólás',

                'comment_new' => ':username ezt kommentálta: ":content" ezen: ":title"',
                'comment_new_compact' => ':username ezt kommentálta: ":content"',
            ],
        ],

        'forum_topic' => [
            '_' => 'Fórum téma',

            'forum_topic_reply' => [
                '_' => 'Új fórum válasz',
                'forum_topic_reply' => ':username válaszolt a fórum témára ":title".',
                'forum_topic_reply_compact' => ':username válaszolt',
            ],
        ],

        'legacy_pm' => [
            '_' => 'Hivatalos PM fórum',

            'legacy_pm' => [
                '_' => '',
                'legacy_pm' => ':count_delimited olvasatlan üzenet.|:count_delimited olvasatlan üzenet.',
            ],
        ],

        'user_achievement' => [
            '_' => 'Medálok',

            'user_achievement_unlock' => [
                '_' => 'Új medál',
                'user_achievement_unlock' => 'Feloldottad ":title"!',
                'user_achievement_unlock_compact' => 'Feloldottad":title"!',
            ],
        ],
    ],

    'mail' => [
        'beatmapset' => [
            'beatmapset_discussion' => '',
            'beatmapset_discussion_lock' => 'A hozzászolás le lett tiltva ezen a beamapen::title',
            'beatmapset_discussion_unlock' => 'A hozzászolás elérhető lett ezen a beatmapen::title',
            'beatmapset_problem' => 'Egy új probléma jelentve lett itt::title',
            'beatmapset_state' => '',
            'comment' => ' Új kommentek jelentek meg ezen a beatmapen::title',
        ],

        'channel' => [
            'channel' => [
                'pm' => 'Új üzenetet kaptál tőle::username',
            ],
        ],

        'build' => [
            'comment' => 'Új kommentek jelentek meg itt::title',
        ],

        'news_post' => [
            'comment' => 'Új kommentek jelentek meg itt::title',
        ],

        'forum_topic' => [
            'forum_topic_reply' => 'Új válaszok itt: ":title"',
        ],

        'user_achievement' => [
            'user_achievement_unlock' => ':username feloldott egy új medált! ":title"',
            'user_achievement_unlock_self' => 'Feloldottál egy új medált! ":title"',
        ],
    ],
];
