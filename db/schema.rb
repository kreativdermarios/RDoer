# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 20160219222107) do

  # These are extensions that must be enabled in order to support this database
  enable_extension "plpgsql"

  create_table "acessos", force: :cascade do |t|
    t.string   "id_acesso"
    t.string   "url"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.integer  "cliente_id"
  end

  add_index "acessos", ["cliente_id"], name: "index_acessos_on_cliente_id", using: :btree

  create_table "clientes", force: :cascade do |t|
    t.string   "nome"
    t.string   "categoria"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
    t.string   "site"
  end

  create_table "contatos", force: :cascade do |t|
    t.string   "nome"
    t.string   "email"
    t.string   "mesage"
    t.integer  "acesso_id"
    t.datetime "created_at", null: false
    t.datetime "updated_at", null: false
  end

  add_index "contatos", ["acesso_id"], name: "index_contatos_on_acesso_id", using: :btree

  add_foreign_key "acessos", "clientes"
  add_foreign_key "contatos", "acessos"
end
