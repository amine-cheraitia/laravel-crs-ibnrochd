<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Client
 *
 * @property int $id
 * @property string $nom
 * @property string $adresse
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $id_compte
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Commande[] $commandes
 * @property-read int|null $commandes_count
 * @property-read \App\Compte|null $compte
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Query\Builder|Client onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereIdCompte($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Client withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Client withoutTrashed()
 */
	class Client extends \Eloquent {}
}

namespace App{
/**
 * App\Commande
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $date_commande
 * @property int $id_client
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Client $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Produit[] $produits
 * @property-read int|null $produits_count
 * @method static \Illuminate\Database\Eloquent\Builder|Commande newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande query()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDateCommande($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereIdClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereUpdatedAt($value)
 */
	class Commande extends \Eloquent {}
}

namespace App{
/**
 * App\Compte
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Client|null $client
 * @method static \Illuminate\Database\Eloquent\Builder|Compte newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Compte newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Compte query()
 * @method static \Illuminate\Database\Eloquent\Builder|Compte whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compte whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compte wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compte whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Compte whereUsername($value)
 */
	class Compte extends \Eloquent {}
}

namespace App{
/**
 * App\Consultation
 *
 * @property int $id
 * @property int $numero
 * @property string $date_consultation
 * @property int|null $id_patient
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Patient|null $patient
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation whereDateConsultation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation whereIdPatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation whereNumero($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consultation whereUpdatedAt($value)
 */
	class Consultation extends \Eloquent {}
}

namespace App{
/**
 * App\Patient
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $id_wilaya
 * @property string $nom
 * @property string $prenom
 * @property-read \App\Wilaya|null $wilaya
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereIdWilaya($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUpdatedAt($value)
 */
	class Patient extends \Eloquent {}
}

namespace App{
/**
 * App\Produit
 *
 * @property int $id
 * @property string $designation
 * @property int $quantité_Stocké
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Commande[] $commandes
 * @property-read int|null $commandes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Produit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Produit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereQuantitéStocké($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Produit whereUpdatedAt($value)
 */
	class Produit extends \Eloquent {}
}

namespace App{
/**
 * App\Role
 *
 * @property int $id
 * @property string $nom
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUserId($value)
 */
	class Role extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Wilaya
 *
 * @property int $id
 * @property string $designation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Consultation[] $consultations
 * @property-read int|null $consultations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Wilaya newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wilaya newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wilaya query()
 * @method static \Illuminate\Database\Eloquent\Builder|Wilaya whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wilaya whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wilaya whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wilaya whereUpdatedAt($value)
 */
	class Wilaya extends \Eloquent {}
}

